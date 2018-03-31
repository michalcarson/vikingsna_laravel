/*
 * see: https://keithclark.co.uk/articles/pure-css-parallax-websites/
 */
@push('style')
    <style>
    .parallax {
        perspective: 1px;
        perspective-origin-x: 100%;
        height: 100vh;
        overflow-x: hidden;
        overflow-y: auto;
    }
    .parallax__layer {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        transform-origin-x: 100%;
    }
    .parallax__group {
        position: relative;
        height: 100vh;
        transform-style: preserve-3d;
        /* transform: translate3d(700px, 0, -800px) rotateY(30deg); */ /* <-- debug */
    }
    .parallax__layer--base {
        transform: translateZ(0);
    }
    .parallax__layer--back {
        transform: translateZ(-1px) scale(2);
    }
    .parallax__layer--deep {
        transform: translateZ(-2px) scale(3);
    }
    </style>
@endpush

@component('parallax')
    <div class="parallax">
        <div class="parallax__group">
            <div class="parallax__layer parallax__layer--back">
                Back {{ $backContent }}
            </div>
            <div class="parallax__layer parallax__layer--base">
                Base {{ $baseContent }}
            </div>
        </div>
    </div>
@endcomponent
