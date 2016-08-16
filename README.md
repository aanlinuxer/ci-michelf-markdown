# CI Michelf Mardown

Helpers Markdown untuk Codeigniter 3.0, berdasarkan [https://github.com/michelf/php-markdown][1]

## Instalasi

1. Copy folder application ke folder application proyek Anda.
2. Download dan extract [https://github.com/michelf/php-markdown][1]
3. Copy php-markdown ke folder application/third_party

## Contoh Penggunaan

```php
$this->load->helper('markdown');

$text = <<<EOT
# Contoh Markdown

> Contoh blockquote

* List 1
* List 2
* List 3
EOT;

echo markdown_decode($text);
```

Atau menggunakan markdown extra:

```php
$this->load->helper('markdown_extra');

$text = <<<EOT
# Contoh Markdown

> Contoh blockquote

* List 1
* List 2
* List 3
EOT;

echo markdown_extra_decode($text);
```


[1]: https://github.com/michelf/php-markdown
