<?php declare(strict_types=1);

    namespace STDW\Contract\View;


    interface ViewManagerInterface
    {
        /**
         * Shares global data with all views.
         *
         * @param array<string, mixed> $data
         * @return void
         */
        public function share(array $data): void;

        /**
         * Renders a view using its alias and local data.
         *
         * Example:
         *   $view->render('admin:index', ['title' => 'Dashboard']);
         *
         * @param string $view View identifier (e.g., "admin:index").
         * @param array<string, mixed> $data Local data passed to the view.
         * @return string Rendered output.
         */
        public function render(string $view, array $data = []): string;
    }
