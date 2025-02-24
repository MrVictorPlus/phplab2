# Лабораторная работа №2. Управляющие структуры

## 1. Инструкции по запуску проекта  
1. Убедитесь, что у вас установлен PHP.  
2. Сохраните файл с кодом в формате `.php`.  
3. Запустите локальный сервер с помощью команды:  
   ```sh
   php -S localhost:8000
   ```
4. Откройте браузер и перейдите по адресу `http://localhost:8000/имя_файла.php`.

## 2. Описание лабораторной работы  
В данной работе изучаются:  
- Работа с датами в PHP  
- Использование условных конструкций (`if-else`)  
- Генерация HTML-таблиц с динамическими данными  
- Применение циклов (`for`, `while`, `do-while`)  

## 3. Краткая документация к проекту  
Файл содержит:  
- Функцию `getSchedule($name)`, возвращающую расписание работы сотрудников  
- Циклы `for`, `while`, `do-while`, демонстрирующие пошаговое изменение переменных  

## 4. Примеры использования  

### Генерация расписания сотрудников  
Пример работы таблицы в браузере:  
```
№ | Фамилия Имя  | График работы  
--------------------------------
1 | John Styles | 8:00-12:00 (или "Нерабочий день")  
2 | Jane Doe    | 12:00-16:00 (или "Нерабочий день")  
```

### Работа с циклами  
Вывод шагов работы циклов `for`, `while`, `do-while` в браузере:  
```
Шаг 0: a = 10, b = 5  
Шаг 1: a = 20, b = 10  
...  
End of the loop: a = 60, b = 30  
```

## 5. Ответы на контрольные вопросы  

**В чем разница между циклами `for`, `while` и `do-while`?**  
- `for` — используется, когда количество итераций заранее известно.  
- `while` — выполняется, пока условие истинно.  
- `do-while` — выполняется хотя бы один раз, даже если условие ложно.  

**Как работает тернарный оператор `? :` в PHP?**  
```php
$var = ($a > $b) ? "a больше" : "b больше";
```
Если `$a > $b`, переменной `$var` присваивается `"a больше"`, иначе `"b больше"`.  

**Что произойдет, если в `do-while` поставить условие, которое изначально ложно?**  
Цикл выполнится один раз, даже если условие ложно.  

## 6. Список использованных источников  
1. Официальная документация PHP: [https://www.php.net/manual/](https://www.php.net/manual/)  
2. Учебник по PHP: [https://www.w3schools.com/php/](https://www.w3schools.com/php/)  

---
