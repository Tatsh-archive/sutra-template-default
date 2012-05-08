# How to use with sTemplate

If you want your templates to be a git repository:

```bash
cd where-templates-are
git submodule add git://github.com/tatsh/sutra-template-default.git default
```

Otherwise:

```bash
cd where-templates-are
git clone git://github.com/tatsh/sutra-template-default.git default
```

```php
sTemplate::setTemplatesPath('where-templates-are');
sTemplate::setProductionModeTemplatesPath('where-templates-are');
```

If you decide to clone this as something else, and wish it to be the fallback template:

```bash
cd where-templates-are
git clone git://github.com/tatsh/sutra-template-default.git original
```

```php
sTemplate::setActiveTemplate('my-preferred-template', 'original');
```
