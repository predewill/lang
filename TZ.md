# О проекте

Проект lang это сервис для помощи в изучении иностранных языков. 

Проект разделен на отдельные сервисы, первый сервис - читалка книг - является независимым и не требует взаймодействия с другими польователями.<br>
Все остальные сервисы зависят от пользователей.<br>
Пользователи должны общаться и взаимодействовать друг с другом, что не очень хорошо. Нет пользователей - сервис будет мертв.

Проект является мультиязычным - продвигать и рекламировать его можно в любой стране мира.

название

share, hack, algoritm, languale, lingua, pattern, patterlog

# Сервисы

1. читалка книг
2. чтение книг + вопросы в группе
3. чтение книг + вопросы в группе для школ
4. сервис вопросов и ответов, как тостер (исправления, помощь с переводом, пониманием, обычный вопрос)
5. рейтинг пользователей - по вопросам или по прочитанным книгам
6. раздел с услугими как на polyglotclub.com
7. раздел с объявлениями о работе / резюме
8. платный раздел с размещением курсов, услуг репетиторов. реклама школ 
  
9. плагин
10. десктопное приложение 

11. сервис / курс по методу дружбинского
12. сервис сс алгоритмами, паттернами языка

13. вот этот вот офиенная тема - https://www.lingq.com/ru/learn/en/web/tutors/search
просто в аккаунте выставляешь настройки, цены на обучение. также репетитор может помогать в рид тогезер.
а договариваются они сами. что не очень хорошо, теряю прибыль с коммисии

  https://www.lingvolive.com/ru-ru/community - п
  
### Сервисы которые будут в MVP

1. читалка книг
2. чтение книг + вопросы в группе
3. чтение книг + вопросы в группе для школ
4. сервис вопросов и ответов, как тостер (исправления, помощь с переводом, пониманием, обычный вопрос)

Все остальное только в случае успеха проекта.

# Монетизация - варианты, идеи
  
1. платная ежемесячная подписка на читалку книг
2. прямые рекламодатели - курсы иностранных языков
3. контекстная реклама - гугл адсенс и  т.п. отключение рекламы за ежемесячную подписку.
4. реф ссылки в разделе с курсами и школами
5. процент от продаж услуг
6. оплата за размещение вакансий
7. в читалке выводить список новостей с разных сайтов. владельцы сайтов могут платить за то чтобы попасть в читалку
8. сделать плагин для браузера платным

#### Создание нового рынка

Мне удобно читать и просто спрашивать непонятные моменты, чобы мне подробно объяснили структуру предложения,
объяснили почему оно оставлено именно так. При этом постоянное общение с репетитором мне не нужно.

Что если сделать это услугой. 
Репетитор на сайте отвечает на вопросы за деньги. 

---

# ТЗ

---

## Основной сайт

- Главная страница-лендинг
- Остальные страницы - контакты, вопросы и т.п.

- регистрация
- авторизация

В меню в хедере будут ссылки на сервисы.
В неавторизованном состоянии это лендинги с описнаием того как работает сервис


## Админка и модерация

- админ панель
- панель для модераторов

---

# Читалка текстов
https://www.lingq.com/ru/learn/en/web/lesson/2081771/chunk/1/word/3

---

Пользователь может загружать тексты либо брать и читать общедоступные. <br>
Пользователь может сохранять слова. В тексте выделены все незнакомые слова. <br>
У текста есть статистика по всем словам с учетом слов которые пользователь уже знает.<br>
Пользователь может задать вопрос прямо со страницы для чтения текста

**страницы:**

- тексты
- страница чтения страницы текста
- мои слова
- добавить текст

**обработка текста**

1. пользователь загружает текст
2. при загрузке текста пользователь должен указать язык текста
3. при загрузке текст разбивается на страницы, страницы текста сохраняются в бд.

- можно добавить текст просто в текстовое поле
- можно загрузить текст в формате - fb2, txt

#### Функционал страниц

**Главная**

- главная страница читалки
- статистика пользователя по новым, изученным словам

**Добавить текст:**

- добавление текста через форму - название и сам текст
- добавление текста через загрузку файла

**Мои тексты:**

- список текстов
- пагинация
- сортировка по дате добавленияhttps://www.lingq.com/ru/learn/en/web/lesson/2081771/chunk/1/word/3
- возможно поиск по названию 
- должна сохраняться последняя откытая пользователем страница
- рассчет прогресса прочтения исходя из текущей страницы - не совсем правильно, но пойдет
- у тексты - новые слова, знакомые, общая статистика, сколько раз используется слово, когда добавлен, страниц, текущая
- редактировать название текста
- удалить текст
- ссылка на окно со статистикой текста

**Страница статистики текста**

всего символом 
страниц
все слова, укникальные. сколько знакомы. незнакомых

слова можно прямо с этой страницы добавлять в знакомые или к изучению

число и процент сколько раз слово используется

**Мои слова:**

Что если сделать два списка 

- слова к изучению - те которые 100% знакомы
- знакомые слова - тут можно будет добавить какой-то тренажер. если вдруг понадобится

- список всех знакомых слов, слова которые переводились.
- пагинация
- экспорт слов

**Страница чтения текста**

- при клике на слово оно переводится
- после перевода слово можно сохранить как знакомое либо как запланированное к изучению
- режим выбора и сохранения знакомых слов
- режим выбора новых слов
- режим перевода целых предложений
- выделить / не выделить незнакомые слова
- форма для создания вопроса - нужно выбирать где создать вопрос - просто на сайте или в группе

---

# READ TOGETHER

---

Как это работает:

Пользовать может создать группу для совместного чтения текстов.
Пользователи читают текст и задают вопросы. 
Вопросы хранятся в группе, пользователи помогают друг другу отвечать на вопросы и понимать непонятные моменты в тектсе.

Группа может быть 
- закрытой - пользователи приглашаются в группу по ссылке
- открытой для всех, отображается в списке всех групп

Типы взаймодействия пользователей в группе
- равные права. любой может задавать и отвечать на вопросы
- "школа" - все вопросы от пользователей направляются одному человеку, учителю (создателю группы)

Права админа 
- блокировать пользователей
- удалять вопросы?
- добавлять тексты

Остальное:
- в группе есть доступная всем статистика каждого пользователя - сколько вопросов, сколько ответов, сколько слов знает


---

# Q and A

---

---

# Рейтинг пользователй

---

- сколько у пользователя знакомых слов
- сколько впоросов
- сколько ответов
- ачивки


---

# СУЩНОСТИ

---

## Foundation


**User**
- id
- nickname
- email
- password
- country
- avatar_image
- о себе
- know_language
- learn_language
- registered_at
- email_verified_at
- last_login_at
- ip_address

**Page**

- id
- title
- content

**Seo**
- title
- description
- keywords


## Reader

**Text**
- id
- user_id 
- title
- current page

**Test Info**
- id
- text_id
- user_id
- total pages
- total_words
- known words
- unknown words
- all_words_in_json


**Text Page**

- id
- page_number
- text_id
- content

**Word** 

- id
- language

word -> language -> translation -> user


## Reader Together

**Group**

- id
- name
- is_public
- type (common or school)
- text_id


## Q and A

**Question**
- id

**Answer**
- id
- question_id





