<?php declare(strict_types=1);

    namespace STDW\Contract\View;


    interface ViewManagerInterface
    {
        /**
         * Sets or retrieves a view path alias.
         *
         * SET:
         *   $view->alias('admin', '/path/to/admin/views');
         * GET:
         *   $path = $view->alias('admin'); // returns '/path/to/admin/views'
         *
         * When $path is provided, the alias is registered.
         * When $path is null, the method returns the previously registered path.
         *
         * @param string $name Alias name.
         * @param null|string $path Directory path (null when retrieving).
         * @return null|string Returns the directory path when used as a getter.
         */
        public function alias(string $name, ?string $path = null): ?string;

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
