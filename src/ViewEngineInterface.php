<?php declare(strict_types=1);

    namespace STDW\Contract\View;


	interface ViewEngineInterface
	{
        /**
         * @param string $view 
         * @param array<string, mixed> $data 
         * @return string 
         */
        public function render(string $view, array $data = []): string;
    }
