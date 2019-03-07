# Meet PHP

I usually use Clojure/ClojureScript, and have experience for Java(5,8), C++11 and JavaScript(ES6).

Now, I'm stating to learn PHP with 初めてのPHP(O'REILLY Japan).

## Environment

```sh
$ php -v
PHP 7.2.15 (cli) (built: Feb  7 2019 20:10:03) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies
    with Zend OPcache v7.2.15, Copyright (c) 1999-2018, by Zend Technologies
```

## Launch build-in Web server

```sh
$ php -S localhost:8888
$ open localhost:8888
```

```php
// First PHP code
<?php

print 'Hello, world!';
```

See http://localhost:8888

## Notes for me

- array() == []
- array can use like map or list
- `implode(',', [])` is like `(str/join "," [])`
- `explode(',", "...")` is like `(str/split "..." #",")`
- Use `$GLOBALS` or `global` keyword to access global variables in function
  - Mostly should use `$GLOBALS`
- `$GLOBALS` is named super global
- To add type definition:
  - `function(string $x): int`
- To call static method:
  - `ClassName::method_name()`
- Constructor name is `__construct()`
- namespace declare: `\A\B\C`
- `use` keyword use like this: `use \A\B\C as X`
- `list($a, $b) = array(1 2)` is destructuring like `(let [[a b] [1 2]])`
