<?php declare(strict_types=1);

    namespace STDW\Contract\View;


    interface AliasAwareInterface extends ViewManagerInterface
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
         * Resolves a view identifier using its registered alias.
         *
         * Example:
         *   resolveAlias('admin:sidebar')
         *   → '/path/to/admin/sidebar.php'
         *
         * @param string $view 
         * @return string 
         */
        public function resolveAlias(string $view): string;
    }
