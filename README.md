# laravel-admin
Панель администратрирования с возможностью выставления счёта на оплату.

Инструкция по распаковке и установке проекта:
1. Необходимо установить composer, (Laravel(7.*), node_modules, php(7.*) - при необходимости)

2. Запустить команды
	a. php artisan key:generate
	b. php artisan migrate
		- перед тем, как выполнить миграции необходимо создать Базу Данных (к примеру laravel_admin), используемая база данных MySql
		- настроить .env файл
	c. php artisan serve

3. Для того, чтобы перейти в панель администратора, необзодимо зарегестрировать пользователя
4. Проблемы, которые могут возникнуть при регистрации пользовтеля - не найден класс User(решенить проблему можно изменив одну/две строчки кода в файла RegisterController -  use use App\User; = App\Models\User; и auth.php -> providers -> 'model' => App\User::class, = 'model' => App\Models\User::class, изменить namespace в моделе User - namespace App; // namespace App\Models;)

6. Что сделано?
	- Выведены вьюшки для обычного пользователя и для зарегестрированного(админа/функционал реализован не до конца)
	- общая вьюшка - форма заполнения карточных данных
	- вьюшки администратора - главная страница админпанели, история "платежей", каждая отдельная запись "платежа"
	- настроены роуты
	- настроены контроллеры, добавлены  модели
	- сделана валидация(на данном этапе не учтёнт Алгоритм Луна)

7. Функционал выставления счёта не реальзован(Про Cashier(striep) узнал чуть позже намеченнго срока, изучаю)