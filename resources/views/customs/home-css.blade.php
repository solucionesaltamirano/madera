<style>
    /* ./your-css-folder/styles.css */

    /* ! tailwindcss v2.1.1 | MIT License | https://tailwindcss.com */

    /*! modern-normalize v1.0.0 | MIT License | https://github.com/sindresorhus/modern-normalize */

    /*
    Document
    ========
    */

    /**
    Use a better box model (opinionated).
    */

    *,
    *::before,
    *::after {
    box-sizing: border-box;
    }

    /**
    Use a more readable tab size (opinionated).
    */

    :root {
    -moz-tab-size: 4;
    -o-tab-size: 4;
        tab-size: 4;
    }

    /**
    1. Correct the line height in all browsers.
    2. Prevent adjustments of font size after orientation changes in iOS.
    */

    html {
    line-height: 1.15; /* 1 */
    -webkit-text-size-adjust: 100%; /* 2 */
    }

    /*
    Sections
    ========
    */

    /**
    Remove the margin in all browsers.
    */

    body {
    margin: 0;
    }

    /**
    Improve consistency of default fonts in all browsers. (https://github.com/sindresorhus/modern-normalize/issues/3)
    */

    body {
    font-family:
            system-ui,
            -apple-system, /* Firefox supports this but not yet `system-ui` */
            'Segoe UI',
            Roboto,
            Helvetica,
            Arial,
            sans-serif,
            'Apple Color Emoji',
            'Segoe UI Emoji';
    }

    /*
    Grouping content
    ================
    */

    /**
    1. Add the correct height in Firefox.
    2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
    */

    hr {
    height: 0; /* 1 */
    color: inherit; /* 2 */
    }

    /*
    Text-level semantics
    ====================
    */

    /**
    Add the correct text decoration in Chrome, Edge, and Safari.
    */

    abbr[title] {
    -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
    }

    /**
    Add the correct font weight in Edge and Safari.
    */

    b,
    strong {
    font-weight: bolder;
    }

    /**
    1. Improve consistency of default fonts in all browsers. (https://github.com/sindresorhus/modern-normalize/issues/3)
    2. Correct the odd 'em' font sizing in all browsers.
    */

    code,
    kbd,
    samp,
    pre {
    font-family:
            ui-monospace,
            SFMono-Regular,
            Consolas,
            'Liberation Mono',
            Menlo,
            monospace; /* 1 */
    font-size: 1em; /* 2 */
    }

    /**
    Add the correct font size in all browsers.
    */

    small {
    font-size: 80%;
    }

    /**
    Prevent 'sub' and 'sup' elements from affecting the line height in all browsers.
    */

    sub,
    sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
    }

    sub {
    bottom: -0.25em;
    }

    sup {
    top: -0.5em;
    }

    /*
    Tabular data
    ============
    */

    /**
    1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
    2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
    */

    table {
    text-indent: 0; /* 1 */
    border-color: inherit; /* 2 */
    }

    /*
    Forms
    =====
    */

    /**
    1. Change the font styles in all browsers.
    2. Remove the margin in Firefox and Safari.
    */

    button,
    input,
    optgroup,
    select,
    textarea {
    font-family: inherit; /* 1 */
    font-size: 100%; /* 1 */
    line-height: 1.15; /* 1 */
    margin: 0; /* 2 */
    }

    /**
    Remove the inheritance of text transform in Edge and Firefox.
    1. Remove the inheritance of text transform in Firefox.
    */

    button,
    select { /* 1 */
    text-transform: none;
    }

    /**
    Correct the inability to style clickable types in iOS and Safari.
    */

    button,
    [type='button'],
    [type='submit'] {
    -webkit-appearance: button;
    }

    /**
    Remove the inner border and padding in Firefox.
    */

    /**
    Restore the focus styles unset by the previous rule.
    */

    /**
    Remove the additional ':invalid' styles in Firefox.
    See: https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737
    */

    /**
    Remove the padding so developers are not caught out when they zero out 'fieldset' elements in all browsers.
    */

    legend {
    padding: 0;
    }

    /**
    Add the correct vertical alignment in Chrome and Firefox.
    */

    progress {
    vertical-align: baseline;
    }

    /**
    Correct the cursor style of increment and decrement buttons in Safari.
    */

    /**
    1. Correct the odd appearance in Chrome and Safari.
    2. Correct the outline style in Safari.
    */

    /**
    Remove the inner padding in Chrome and Safari on macOS.
    */

    /**
    1. Correct the inability to style clickable types in iOS and Safari.
    2. Change font properties to 'inherit' in Safari.
    */

    /*
    Interactive
    ===========
    */

    /*
    Add the correct display in Chrome and Safari.
    */

    summary {
    display: list-item;
    }

    /**
    * Manually forked from SUIT CSS Base: https://github.com/suitcss/base
    * A thin layer on top of normalize.css that provides a starting point more
    * suitable for web applications.
    */

    /**
    * Removes the default spacing and border for appropriate elements.
    */

    blockquote,
    dl,
    dd,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    hr,
    figure,
    p,
    pre {
    margin: 0;
    }

    button {
    background-color: transparent;
    background-image: none;
    }

    /**
    * Work around a Firefox/IE bug where the transparent `button` background
    * results in a loss of the default `button` focus styles.
    */

    button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color;
    }

    fieldset {
    margin: 0;
    padding: 0;
    }

    ol,
    ul {
    list-style: none;
    margin: 0;
    padding: 0;
    }

    /**
    * Tailwind custom reset styles
    */

    /**
    * 1. Use the user's configured `sans` font-family (with Tailwind's default
    *    sans-serif font stack as a fallback) as a sane default.
    * 2. Use Tailwind's default "normal" line-height so the user isn't forced
    *    to override it to ensure consistency even when using the default theme.
    */

    html {
    font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; /* 1 */
    line-height: 1.5; /* 2 */
    }

    /**
    * Inherit font-family and line-height from `html` so users can set them as
    * a class directly on the `html` element.
    */

    body {
    font-family: inherit;
    line-height: inherit;
    }

    /**
    * 1. Prevent padding and border from affecting element width.
    *
    *    We used to set this in the html element and inherit from
    *    the parent element for everything else. This caused issues
    *    in shadow-dom-enhanced elements like <details> where the content
    *    is wrapped by a div with box-sizing set to `content-box`.
    *
    *    https://github.com/mozdevs/cssremedy/issues/4
    *
    *
    * 2. Allow adding a border to an element by just adding a border-width.
    *
    *    By default, the way the browser specifies that an element should have no
    *    border is by setting it's border-style to `none` in the user-agent
    *    stylesheet.
    *
    *    In order to easily add borders to elements by just setting the `border-width`
    *    property, we change the default border-style for all elements to `solid`, and
    *    use border-width to hide them instead. This way our `border` utilities only
    *    need to set the `border-width` property instead of the entire `border`
    *    shorthand, making our border utilities much more straightforward to compose.
    *
    *    https://github.com/tailwindcss/tailwindcss/pull/116
    */

    *,
    ::before,
    ::after {
    box-sizing: border-box; /* 1 */
    border-width: 0; /* 2 */
    border-style: solid; /* 2 */
    border-color: #e5e7eb; /* 2 */
    }

    /*
    * Ensure horizontal rules are visible by default
    */

    hr {
    border-top-width: 1px;
    }

    /**
    * Undo the `border-style: none` reset that Normalize applies to images so that
    * our `border-{width}` utilities have the expected effect.
    *
    * The Normalize reset is unnecessary for us since we default the border-width
    * to 0 on all elements.
    *
    * https://github.com/tailwindcss/tailwindcss/issues/362
    */

    img {
    border-style: solid;
    }

    textarea {
    resize: vertical;
    }

    input::-moz-placeholder, textarea::-moz-placeholder {
    opacity: 1;
    color: #9ca3af;
    }

    input:-ms-input-placeholder, textarea:-ms-input-placeholder {
    opacity: 1;
    color: #9ca3af;
    }

    input::placeholder,
    textarea::placeholder {
    opacity: 1;
    color: #9ca3af;
    }

    button {
    cursor: pointer;
    }

    table {
    border-collapse: collapse;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
    font-size: inherit;
    font-weight: inherit;
    }

    /**
    * Reset links to optimize for opt-in styling instead of
    * opt-out.
    */

    a {
    color: inherit;
    text-decoration: inherit;
    }

    /**
    * Reset form element properties that are easy to forget to
    * style explicitly so you don't inadvertently introduce
    * styles that deviate from your design system. These styles
    * supplement a partial reset that is already applied by
    * normalize.css.
    */

    button,
    input,
    optgroup,
    select,
    textarea {
    padding: 0;
    line-height: inherit;
    color: inherit;
    }

    /**
    * Use the configured 'mono' font family for elements that
    * are expected to be rendered with a monospace font, falling
    * back to the system monospace stack if there is no configured
    * 'mono' font family.
    */

    pre,
    code,
    kbd,
    samp {
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    }

    /**
    * Make replaced elements `display: block` by default as that's
    * the behavior you want almost all of the time. Inspired by
    * CSS Remedy, with `svg` added as well.
    *
    * https://github.com/mozdevs/cssremedy/issues/14
    */

    img,
    svg,
    video,
    canvas,
    audio,
    iframe,
    embed,
    object {
    display: block;
    vertical-align: middle;
    }

    /**
    * Constrain images and videos to the parent width and preserve
    * their intrinsic aspect ratio.
    *
    * https://github.com/mozdevs/cssremedy/issues/14
    */

    img,
    video {
    max-width: 100%;
    height: auto;
    }

    .container {
    width: 100%;
    }

    @media (min-width: 640px) {
    .container {
        max-width: 640px;
    }
    }

    @media (min-width: 768px) {
    .container {
        max-width: 768px;
    }
    }

    @media (min-width: 1024px) {
    .container {
        max-width: 1024px;
    }
    }

    @media (min-width: 1280px) {
    .container {
        max-width: 1280px;
    }
    }

    @media (min-width: 1536px) {
    .container {
        max-width: 1536px;
    }
    }

    .space-y-2 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
    }

    .space-x-2 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(0.5rem * var(--tw-space-x-reverse));
    margin-left: calc(0.5rem * calc(1 - var(--tw-space-x-reverse)));
    }

    .space-y-4 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1rem * var(--tw-space-y-reverse));
    }

    .space-x-4 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(1rem * var(--tw-space-x-reverse));
    margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
    }

    .space-y-5 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1.25rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1.25rem * var(--tw-space-y-reverse));
    }

    .space-y-6 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
    }

    .space-x-6 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(1.5rem * var(--tw-space-x-reverse));
    margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)));
    }

    .space-y-8 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(2rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(2rem * var(--tw-space-y-reverse));
    }

    .space-y-12 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(3rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(3rem * var(--tw-space-y-reverse));
    }

    .space-y-2\.5 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(0.625rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(0.625rem * var(--tw-space-y-reverse));
    }

    .space-x-2\.5 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(0.625rem * var(--tw-space-x-reverse));
    margin-left: calc(0.625rem * calc(1 - var(--tw-space-x-reverse)));
    }

    .bg-white {
    --tw-bg-opacity: 1;
    background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
    }

    .bg-gray-100 {
    --tw-bg-opacity: 1;
    background-color: rgba(243, 244, 246, var(--tw-bg-opacity));
    }

    .bg-green-600 {
    --tw-bg-opacity: 1;
    background-color: rgba(5, 150, 105, var(--tw-bg-opacity));
    }

    .bg-green-700 {
    --tw-bg-opacity: 1;
    background-color: rgba(4, 120, 87, var(--tw-bg-opacity));
    }

    .hover\:bg-green-700:hover {
    --tw-bg-opacity: 1;
    background-color: rgba(4, 120, 87, var(--tw-bg-opacity));
    }

    .hover\:bg-green-800:hover {
    --tw-bg-opacity: 1;
    background-color: rgba(6, 95, 70, var(--tw-bg-opacity));
    }

    .border-white {
    --tw-border-opacity: 1;
    border-color: rgba(255, 255, 255, var(--tw-border-opacity));
    }

    .border-gray-200 {
    --tw-border-opacity: 1;
    border-color: rgba(229, 231, 235, var(--tw-border-opacity));
    }

    .hover\:border-green-600:hover {
    --tw-border-opacity: 1;
    border-color: rgba(5, 150, 105, var(--tw-border-opacity));
    }

    .focus\:border-green-600:focus {
    --tw-border-opacity: 1;
    border-color: rgba(5, 150, 105, var(--tw-border-opacity));
    }

    .focus\:border-green-700:focus {
    --tw-border-opacity: 1;
    border-color: rgba(4, 120, 87, var(--tw-border-opacity));
    }

    .rounded-lg {
    border-radius: 0.5rem;
    }

    .rounded-full {
    border-radius: 9999px;
    }

    .border-solid {
    border-style: solid;
    }

    .border-2 {
    border-width: 2px;
    }

    .flex {
    display: flex;
    }

    .table {
    display: table;
    }

    .grid {
    display: grid;
    }

    .hidden {
    display: none;
    }

    .flex-col {
    flex-direction: column;
    }

    .items-center {
    align-items: center;
    }

    .justify-center {
    justify-content: center;
    }

    .justify-between {
    justify-content: space-between;
    }

    .flex-1 {
    flex: 1 1 0%;
    }

    .font-sans {
    font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }

    .font-medium {
    font-weight: 500;
    }

    .font-semibold {
    font-weight: 600;
    }

    .h-5 {
    height: 1.25rem;
    }

    .h-6 {
    height: 1.5rem;
    }

    .h-7 {
    height: 1.75rem;
    }

    .h-12 {
    height: 3rem;
    }

    .h-16 {
    height: 4rem;
    }

    .text-xs {
    font-size: 0.75rem;
    line-height: 1rem;
    }

    .text-sm {
    font-size: 0.875rem;
    line-height: 1.25rem;
    }

    .text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem;
    }

    .text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem;
    }

    .text-2xl {
    font-size: 1.5rem;
    line-height: 2rem;
    }

    .text-3xl {
    font-size: 1.875rem;
    line-height: 2.25rem;
    }

    .text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem;
    }

    .mx-auto {
    margin-left: auto;
    margin-right: auto;
    }

    .mt-6 {
    margin-top: 1.5rem;
    }

    .mb-6 {
    margin-bottom: 1.5rem;
    }

    .mb-8 {
    margin-bottom: 2rem;
    }

    .mb-10 {
    margin-bottom: 2.5rem;
    }

    .max-w-sm {
    max-width: 24rem;
    }

    .outline-none {
    outline: 2px solid transparent;
    outline-offset: 2px;
    }

    .p-6 {
    padding: 1.5rem;
    }

    .p-8 {
    padding: 2rem;
    }

    .py-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    }

    .py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
    }

    .px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
    }

    .px-5 {
    padding-left: 1.25rem;
    padding-right: 1.25rem;
    }

    .py-6 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    }

    .px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
    }

    .py-12 {
    padding-top: 3rem;
    padding-bottom: 3rem;
    }

    .py-2\.5 {
    padding-top: 0.625rem;
    padding-bottom: 0.625rem;
    }

    * {
    --tw-shadow: 0 0 #0000;
    }

    .shadow {
    --tw-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .hover\:shadow-xl:hover {
    --tw-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    * {
    --tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgba(59, 130, 246, 0.5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    }

    .text-center {
    text-align: center;
    }

    .text-white {
    --tw-text-opacity: 1;
    color: rgba(255, 255, 255, var(--tw-text-opacity));
    }

    .text-gray-500 {
    --tw-text-opacity: 1;
    color: rgba(107, 114, 128, var(--tw-text-opacity));
    }

    .text-gray-600 {
    --tw-text-opacity: 1;
    color: rgba(75, 85, 99, var(--tw-text-opacity));
    }

    .text-green-700 {
    --tw-text-opacity: 1;
    color: rgba(4, 120, 87, var(--tw-text-opacity));
    }

    .hover\:text-green-700:hover {
    --tw-text-opacity: 1;
    color: rgba(4, 120, 87, var(--tw-text-opacity));
    }

    .underline {
    text-decoration: underline;
    }

    .antialiased {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    }

    .w-5 {
    width: 1.25rem;
    }

    .w-6 {
    width: 1.5rem;
    }

    .w-7 {
    width: 1.75rem;
    }

    .w-12 {
    width: 3rem;
    }

    .w-16 {
    width: 4rem;
    }

    .w-full {
    width: 100%;
    }

    .gap-6 {
    gap: 1.5rem;
    }

    .gap-8 {
    gap: 2rem;
    }

    .gap-10 {
    gap: 2.5rem;
    }

    .grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
    }

    .transform {
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .hover\:scale-125:hover {
    --tw-scale-x: 1.25;
    --tw-scale-y: 1.25;
    }

    .transition {
    transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
    transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
    transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 150ms;
    }

    .transition-colors {
    transition-property: background-color, border-color, color, fill, stroke;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 150ms;
    }

    .transition-shadow {
    transition-property: box-shadow;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 150ms;
    }

    .ease-in-out {
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    }

    .duration-200 {
    transition-duration: 200ms;
    }

    .duration-300 {
    transition-duration: 300ms;
    }

    .duration-500 {
    transition-duration: 500ms;
    }

    @-webkit-keyframes spin {
    to {
        transform: rotate(360deg);
    }
    }

    @keyframes spin {
    to {
        transform: rotate(360deg);
    }
    }

    @-webkit-keyframes ping {
    75%, 100% {
        transform: scale(2);
        opacity: 0;
    }
    }

    @keyframes ping {
    75%, 100% {
        transform: scale(2);
        opacity: 0;
    }
    }

    @-webkit-keyframes pulse {
    50% {
        opacity: .5;
    }
    }

    @keyframes pulse {
    50% {
        opacity: .5;
    }
    }

    @-webkit-keyframes bounce {
    0%, 100% {
        transform: translateY(-25%);
        -webkit-animation-timing-function: cubic-bezier(0.8,0,1,1);
                animation-timing-function: cubic-bezier(0.8,0,1,1);
    }

    50% {
        transform: none;
        -webkit-animation-timing-function: cubic-bezier(0,0,0.2,1);
                animation-timing-function: cubic-bezier(0,0,0.2,1);
    }
    }

    @keyframes bounce {
    0%, 100% {
        transform: translateY(-25%);
        -webkit-animation-timing-function: cubic-bezier(0.8,0,1,1);
                animation-timing-function: cubic-bezier(0.8,0,1,1);
    }

    50% {
        transform: none;
        -webkit-animation-timing-function: cubic-bezier(0,0,0.2,1);
                animation-timing-function: cubic-bezier(0,0,0.2,1);
    }
    }

    @media (min-width: 640px) {
    .sm\:space-y-0 > :not([hidden]) ~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(0px * var(--tw-space-y-reverse));
    }

    .sm\:space-y-6 > :not([hidden]) ~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
    }

    .sm\:space-y-16 > :not([hidden]) ~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(4rem * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(4rem * var(--tw-space-y-reverse));
    }

    .sm\:rounded-none {
        border-radius: 0px;
    }

    .sm\:rounded-lg {
        border-radius: 0.5rem;
    }

    .sm\:rounded-tl-lg {
        border-top-left-radius: 0.5rem;
    }

    .sm\:rounded-tr-lg {
        border-top-right-radius: 0.5rem;
    }

    .sm\:rounded-br-lg {
        border-bottom-right-radius: 0.5rem;
    }

    .sm\:rounded-bl-lg {
        border-bottom-left-radius: 0.5rem;
    }

    .sm\:border-r-0 {
        border-right-width: 0px;
    }

    .sm\:flex-row {
        flex-direction: row;
    }

    .sm\:text-6xl {
        font-size: 3.75rem;
        line-height: 1;
    }

    .sm\:px-4 {
        padding-left: 1rem;
        padding-right: 1rem;
    }

    .sm\:py-16 {
        padding-top: 4rem;
        padding-bottom: 4rem;
    }

    .sm\:w-72 {
        width: 18rem;
    }

    .sm\:w-4\/5 {
        width: 80%;
    }

    .sm\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
    }

    @media (min-width: 768px) {
    .md\:space-y-0 > :not([hidden]) ~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(0px * var(--tw-space-y-reverse));
    }

    .md\:space-x-3 > :not([hidden]) ~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(0.75rem * var(--tw-space-x-reverse));
        margin-left: calc(0.75rem * calc(1 - var(--tw-space-x-reverse)));
    }

    .md\:block {
        display: block;
    }

    .md\:hidden {
        display: none;
    }

    .md\:flex-row {
        flex-direction: row;
    }

    .md\:justify-end {
        justify-content: flex-end;
    }

    .md\:justify-center {
        justify-content: center;
    }

    .md\:text-3xl {
        font-size: 1.875rem;
        line-height: 2.25rem;
    }

    .md\:text-4xl {
        font-size: 2.25rem;
        line-height: 2.5rem;
    }

    .md\:text-5xl {
        font-size: 3rem;
        line-height: 1;
    }

    .md\:max-w-md {
        max-width: 28rem;
    }

    .md\:py-20 {
        padding-top: 5rem;
        padding-bottom: 5rem;
    }

    .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
    }

    @media (min-width: 1024px) {
    .lg\:space-y-0 > :not([hidden]) ~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(0px * var(--tw-space-y-reverse));
    }

    .lg\:space-x-10 > :not([hidden]) ~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(2.5rem * var(--tw-space-x-reverse));
        margin-left: calc(2.5rem * calc(1 - var(--tw-space-x-reverse)));
    }

    .lg\:space-y-12 > :not([hidden]) ~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(3rem * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(3rem * var(--tw-space-y-reverse));
    }

    .lg\:flex-row {
        flex-direction: row;
    }

    .lg\:flex-row-reverse {
        flex-direction: row-reverse;
    }

    .lg\:mb-12 {
        margin-bottom: 3rem;
    }

    .lg\:mb-16 {
        margin-bottom: 4rem;
    }

    .lg\:w-1\/2 {
        width: 50%;
    }

    .lg\:gap-10 {
        gap: 2.5rem;
    }

    .lg\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .lg\:grid-cols-6 {
        grid-template-columns: repeat(6, minmax(0, 1fr));
    }
    }

    @media (min-width: 1280px) {
    .xl\:space-y-24 > :not([hidden]) ~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(6rem * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(6rem * var(--tw-space-y-reverse));
    }

    .xl\:py-28 {
        padding-top: 7rem;
        padding-bottom: 7rem;
    }

    .xl\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }

    .xl\:grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr));
    }
    }

    @media (min-width: 1536px) {
    }
</style>