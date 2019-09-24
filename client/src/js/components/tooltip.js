import tippy from 'tippy.js'

export default function () {

    const tooltip = function () {
        tippy('.tooltip', {
            position: 'bottom',
            animation: 'fade',
            duration: 200,
            delay: 400,
            arrow: true,
            theme: 'intranet'
        })
    };

    tooltip();
}
