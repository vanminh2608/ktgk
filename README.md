1. Cài đặt Lavarel 
* Yêu cầu hệ thống
Trước khi cài đặt Laravel 11, cần đảm bảo hệ thống máy tính đáp ứng các yêu cầu sau:
- PHP phiên bản 8.1 trở lên
- Composer
- Một số tiện ích mở rộng của PHP: OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON
 
* Các bước cài đặt để chạy Lavarel với composer
- Composer là một công cụ quản lý phụ thuộc trong PHP. Cần cài đặt Composer trước khi cài đặt Laravel. 

Tải Composer: Truy cập trang web getcomposer.org và tải Composer về máy.

Cài Đặt Composer: Chạy tập tin tải về để cài đặt Composer trên máy tính.

2. Tạo dự án Lavarel với composer
- Sau khi cài đặt Composer, bạn có thể tạo một dự án Laravel mới bằng cách sử dụng lệnh sau trong terminal : composer create-project --prefer-dist laravel/laravel my_project (my_project là tên file mình tạo dự án)
- Khởi Động Server Laravel: Sử dụng Artisan CLI để khởi động server tích hợp của Laravel: php artisan serve 
- Mở trình duyệt và truy cập địa chỉ http://127.0.0.1:8000/helloWorld để xem trang chủ của dự án Laravel.
![image](https://github.com/vanminh2608/ktgk/assets/101303669/7a72e4e2-89f9-4b68-9f09-52fe065fdb19)
