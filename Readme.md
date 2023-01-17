## Инфо

Драйвер ItIsAllMail для linux.org.ru. Рассчитан на использование только в пределах форума.

## Установка:

1) Установить ItIsAllMail.
2) Установить драйвер.

    cd lib/ItIsAllMail/Driver/
    git clone https://github.com/yalexwander/iam-driver-linux.org.ru linux.org.ru

3) Включить драйвер в конфигурации ItIsAllMail в `conf/config.yml`:

```
drivers :
  - "linux.org.ru"
```

4) Добавить source в `conf/sources.yml`:

```
- url: https://www.linux.org.ru/forum/development/11703446
  mailbox_base_dir: /tmp
  mailbox: mailbox_lor
```

