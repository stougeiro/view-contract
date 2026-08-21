![phpstan-level](https://img.shields.io/badge/PHPStan-Level%209-brightgreen)

# View Contract

A minimal and engine‑agnostic view contract for PHP. It provides a clean interface for alias‑based view resolution, global data sharing, and unified rendering, allowing any template engine (Twig, Blade, Plates, Latte, Mustache, etc.) to integrate effortlessly.

## ✨ Features

- **Alias‑based view resolution**  
  Use short identifiers like `admin:index` mapped to real filesystem paths..

- **Global shared data**  
  Inject variables available to all views during the request lifecycle.

- **Engine‑agnostic design**  
  Works with any rendering engine — PHP native, Twig, Blade, Plates, Latte, Mustache, or custom engines.

- **Minimal API**  
  Only three methods: `alias()`, `share()`, and `render()`.

- **Framework‑friendly**  
  Designed to be embedded into any PHP framework or micro‑framework.

---

## 📦 Installation

Install via Composer:

```bash
composer require stougeiro/view-contract
```

## 🔧 Implementations

Below is a list of known implementations maintained by the community.

- `stougeiro/view`  
  Repository: https://github.com/stougeiro/view

---

## 🧠 Why?

Most PHP view systems are tightly coupled to a specific engine or framework.  
This package provides a unified contract that allows developers to:
- swap rendering engines without changing application code
- organize views using clean aliases instead of hardcoded paths
- share global data in a predictable and framework‑agnostic way
- build custom view layers with minimal boilerplate

If you want a simple, elegant, engine‑agnostic view layer — this contract is the foundation.

---

## 🤝 Contributions

Contributions are welcome.
Feel free to open issues or submit pull requests.

<br><br>

[<img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" width="170"/>](https://www.buymeacoffee.com/stougeiro)