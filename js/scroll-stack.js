class ScrollStack {
    constructor(options = {}) {
        this.options = {
            itemDistance: 100,
            itemScale: 0.03,
            itemStackDistance: 30,
            stackPosition: "20%",
            scaleEndPosition: "10%",
            baseScale: 0.85,
            rotationAmount: 0,
            blurAmount: 0,
            ...options
        };
        
        this.scroller = null;
        this.cards = [];
        this.lastTransforms = new Map();
        this.isUpdating = false;
        this.animationFrame = null;
        
        this.init();
    }
    
    init() {
        this.scroller = document.querySelector('.scroll-stack-scroller');
        if (!this.scroller) return;
        
        this.cards = Array.from(this.scroller.querySelectorAll('.scroll-stack-card'));
        if (!this.cards.length) return;
        
        this.setupCards();
        this.bindEvents();
        this.updateCardTransforms();
    }
    
    setupCards() {
        this.cards.forEach((card, i) => {
            if (i < this.cards.length - 1) {
                card.style.marginBottom = `${this.options.itemDistance}px`;
            }
            card.style.willChange = 'transform, filter';
            card.style.transformOrigin = 'top center';
            card.style.backfaceVisibility = 'hidden';
            card.style.transform = 'translateZ(0)';
            card.style.webkitTransform = 'translateZ(0)';
        });
    }
    
    bindEvents() {
        this.scroller.addEventListener('scroll', this.handleScroll.bind(this));
        window.addEventListener('resize', this.handleResize.bind(this));
    }
    
    handleScroll() {
        if (!this.isUpdating) {
            this.animationFrame = requestAnimationFrame(() => {
                this.updateCardTransforms();
            });
        }
    }
    
    handleResize() {
        this.updateCardTransforms();
    }
    
    calculateProgress(scrollTop, start, end) {
        if (scrollTop < start) return 0;
        if (scrollTop > end) return 1;
        return (scrollTop - start) / (end - start);
    }
    
    parsePercentage(value, containerHeight) {
        if (typeof value === 'string' && value.includes('%')) {
            return (parseFloat(value) / 100) * containerHeight;
        }
        return parseFloat(value);
    }
    
    updateCardTransforms() {
        if (!this.scroller || !this.cards.length || this.isUpdating) return;
        
        this.isUpdating = true;
        
        const scrollTop = this.scroller.scrollTop;
        const containerHeight = this.scroller.clientHeight;
        const stackPositionPx = this.parsePercentage(this.options.stackPosition, containerHeight);
        const scaleEndPositionPx = this.parsePercentage(this.options.scaleEndPosition, containerHeight);
        const endElement = this.scroller.querySelector('.scroll-stack-end');
        const endElementTop = endElement ? endElement.offsetTop : 0;
        
        this.cards.forEach((card, i) => {
            if (!card) return;
            
            const cardTop = card.offsetTop;
            const triggerStart = cardTop - stackPositionPx - (this.options.itemStackDistance * i);
            const triggerEnd = cardTop - scaleEndPositionPx;
            const pinStart = cardTop - stackPositionPx - (this.options.itemStackDistance * i);
            const pinEnd = endElementTop - containerHeight / 2;
            
            const scaleProgress = this.calculateProgress(scrollTop, triggerStart, triggerEnd);
            const targetScale = this.options.baseScale + (i * this.options.itemScale);
            const scale = 1 - scaleProgress * (1 - targetScale);
            const rotation = this.options.rotationAmount ? i * this.options.rotationAmount * scaleProgress : 0;
            
            let blur = 0;
            if (this.options.blurAmount) {
                let topCardIndex = 0;
                for (let j = 0; j < this.cards.length; j++) {
                    const jCardTop = this.cards[j].offsetTop;
                    const jTriggerStart = jCardTop - stackPositionPx - (this.options.itemStackDistance * j);
                    if (scrollTop >= jTriggerStart) {
                        topCardIndex = j;
                    }
                }
                
                if (i < topCardIndex) {
                    const depthInStack = topCardIndex - i;
                    blur = Math.max(0, depthInStack * this.options.blurAmount);
                }
            }
            
            let translateY = 0;
            const isPinned = scrollTop >= pinStart && scrollTop <= pinEnd;
            
            if (isPinned) {
                translateY = scrollTop - cardTop + stackPositionPx + (this.options.itemStackDistance * i);
            } else if (scrollTop > pinEnd) {
                translateY = pinEnd - cardTop + stackPositionPx + (this.options.itemStackDistance * i);
            }
            
            const newTransform = {
                translateY: Math.round(translateY * 100) / 100,
                scale: Math.round(scale * 1000) / 1000,
                rotation: Math.round(rotation * 100) / 100,
                blur: Math.round(blur * 100) / 100
            };
            
            const lastTransform = this.lastTransforms.get(i);
            const hasChanged = !lastTransform || 
                Math.abs(lastTransform.translateY - newTransform.translateY) > 0.1 ||
                Math.abs(lastTransform.scale - newTransform.scale) > 0.001 ||
                Math.abs(lastTransform.rotation - newTransform.rotation) > 0.1 ||
                Math.abs(lastTransform.blur - newTransform.blur) > 0.1;
            
            if (hasChanged) {
                const transform = `translate3d(0, ${newTransform.translateY}px, 0) scale(${newTransform.scale}) rotate(${newTransform.rotation}deg)`;
                const filter = newTransform.blur > 0 ? `blur(${newTransform.blur}px)` : '';
                
                card.style.transform = transform;
                card.style.filter = filter;
                
                this.lastTransforms.set(i, newTransform);
            }
        });
        
        this.isUpdating = false;
    }
    
    destroy() {
        if (this.animationFrame) {
            cancelAnimationFrame(this.animationFrame);
        }
        if (this.scroller) {
            this.scroller.removeEventListener('scroll', this.handleScroll.bind(this));
        }
        window.removeEventListener('resize', this.handleResize.bind(this));
        this.lastTransforms.clear();
        this.cards = [];
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new ScrollStack({
        itemDistance: 100,
        itemScale: 0.05,
        itemStackDistance: 40,
        stackPosition: "30%",
        scaleEndPosition: "15%",
        baseScale: 0.9,
        rotationAmount: 2,
        blurAmount: 0.5
    });
});

// Export for manual initialization if needed
window.ScrollStack = ScrollStack;