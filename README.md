![PHP](https://img.shields.io/badge/PHP-%20^8.2-777BB4)
![PHPStan-Level](https://img.shields.io/badge/PHPStan-Level%209-224488)
![License](https://img.shields.io/badge/License-MIT-777)

# View Contract

A minimal and engine‑agnostic view contract for PHP. It provides three independent interfaces for alias‑based view resolution, global data sharing, and unified rendering, allowing any template engine (Twig, Blade, Plates, Latte, Mustache, etc.) to integrate effortlessly.

## ✨ Features

- **Alias‑based view resolution**  
  Use short identifiers like `admin:index` mapped to real filesystem paths.

- **Global shared data**  
  Inject variables available to all views during the request lifecycle.

- **Engine‑agnostic design**  
  Works with any rendering engine — PHP native, Twig, Blade, Plates, Latte, Mustache, or custom engines.

- **Independent contracts**  
  `ViewManagerInterface`, `AliasManagerInterface`, and `ViewEngineInterface` have one role each — no inheritance between them, so an implementation depends only on the capabilities it uses.

- **Minimal API**  
  Five methods across three contracts: `alias()`, `resolveAlias()`, `share()`, `render()`, and the engine's `render()`.

- **Framework‑friendly**  
  Designed to be embedded into any PHP framework or micro‑framework.

---

## 🧩 Contracts

| Contract | Role | Methods |
|----------|------|---------|
| `ViewManagerInterface` | the view layer concept | `render()`, `share()` |
| `AliasManagerInterface` | view namespace capability | `alias()`, `resolveAlias()` |
| `ViewEngineInterface` | the rendering engine | `render()` |

`stougeiro/view`, for example, implements `ViewManagerInterface` and `AliasManagerInterface`; the engine is a separate `ViewEngineInterface` implementation. A consumer that only registers view namespaces can depend on `AliasManagerInterface` alone — it never needs to know how rendering works.

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
- depend only on the capability they use — rendering, aliases, or engine — keeping implementations interchangeable
- share global data in a predictable and framework‑agnostic way
- build custom view layers with minimal boilerplate

If you want a simple, elegant, engine‑agnostic view layer — this contract is the foundation.

---

## 🤝 Contributions

Contributions are welcome.
Feel free to open issues or submit pull requests.

<br>

[<img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" width="170"/>](https://www.buymeacoffee.com/stougeiro)