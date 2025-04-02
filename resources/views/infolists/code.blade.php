<div>
    <style>
        html.dark code.torchlight {
            background-color: var(--phiki-dark-background-color) !important;
        }

        html.dark .phiki,
        html.dark .phiki span {
            color: var(--phiki-dark-color) !important;
            font-style: var(--phiki-dark-font-style) !important;
            font-weight: var(--phiki-dark-font-weight) !important;
            text-decoration: var(--phiki-dark-text-decoration) !important;
        }

        /*
  Blur and dim the lines that don't have the `.line-focus` class,
  but are within a code block that contains any focus lines.
*/
        .torchlight.has-focus-lines .line:not(.line-focus) {
            transition: filter 0.35s, opacity 0.35s;
            filter: blur(.095rem);
            opacity: .65;
        }

        /*
          When the code block is hovered, bring all the lines into focus.
        */
        .torchlight.has-focus-lines:hover .line:not(.line-focus) {
            filter: blur(0px);
            opacity: 1;
        }
        .torchlight summary:focus {
            outline: none;
        }

        /* Hide the default markers, as we provide our own */
        .torchlight details > summary::marker,
        .torchlight details > summary::-webkit-details-marker {
            display: none;
        }

        .torchlight details .summary-caret::after {
            pointer-events: none;
        }

        /* Add spaces to keep everything aligned */
        .torchlight .summary-caret-empty::after,
        .torchlight details .summary-caret-middle::after,
        .torchlight details .summary-caret-end::after {
            content: " ";
        }

        /* Show a minus sign when the block is open. */
        .torchlight details[open] .summary-caret-start::after {
            content: "-";
        }

        /* And a plus sign when the block is closed. */
        .torchlight details:not([open]) .summary-caret-start::after {
            content: "+";
        }

        /* Hide the [...] indicator when open. */
        .torchlight details[open] .summary-hide-when-open {
            display: none;
        }

        /* Show the [...] indicator when closed. */
        .torchlight details:not([open]) .summary-hide-when-open {
            display: initial;
        }
    </style>
    @php
        $theme = $getTheme();
        $code = $getState();
        $gutter = $isWithGutter();
        $wrapper = $isWithWrapper();
        $grammar = $getGrammar();
    @endphp
    {!!
        (new \Torchlight\Engine\Engine())->codeToHtml(
            code: $code,
            grammar: $grammar,
            theme: $theme,
            withGutter: $gutter,
            withWrapper: $wrapper
        )
    !!}
</div>
