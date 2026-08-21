<?php declare(strict_types=1);

    namespace STDW\Contract\View;


	interface ViewEngineInterface
	{
        /**
         * Renders a view using the underlying engine.
         *
         * The engine receives a fully‑resolved view path (or identifier,
         * depending on the implementation) along with the data to be
         * injected into the template during rendering.
         *
         * @param string $view Fully‑qualified view path or identifier.
         * @param array<string, mixed> $data Variables made available to the view.
         * @return string Rendered output produced by the engine.
         */
        public function render(string $view, array $data = []): string;
    }
