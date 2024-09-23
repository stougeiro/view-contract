<?php declare(strict_types=1);

    namespace STDW\View\Contract;


    interface ViewInterface
    {
        public function setStorage(string $name, string $path): void;

        public function compose(array $data): void;

        public function compile(string $file, array $data = []): string;

        public function render(string $file, array $data = []): void;
    }