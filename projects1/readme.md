project/
│
├── public_html/              # Thư mục chỉ chứa các tập tin mà người dùng có thể truy cập trực tiếp qua web server
│   ├── index.php             # File index chính của ứng dụng
│   ├── css/                  # Thư mục chứa các tập tin CSS
│   ├── js/                   # Thư mục chứa các tập tin JavaScript
│   └── images/               # Thư mục chứa các hình ảnh và tập tin đa phương tiện
│
├── includes/                 # Thư mục chứa các file include, chứa mã PHP tái sử dụng
│   ├── db_connection.php     # File kết nối đến cơ sở dữ liệu MySQL sử dụng PDO
│   └── functions.php         # Các hàm và đoạn mã PHP tái sử dụng khác
│
├── config/                   # Thư mục chứa các tập tin cấu hình
│   └── config.php            # File cấu hình cho ứng dụng (ví dụ: thông tin kết nối MySQL)
│
├── pages/                    # Thư mục chứa các tập tin PHP cho các trang cụ thể của ứng dụng
│   ├── about.php             # Trang "About" của ứng dụng
│   ├── contact.php           # Trang "Contact" của ứng dụng
│   └── ...
│
├── vendor/                   # Thư mục chứa các thư viện bên thứ ba (nếu sử dụng Composer)
│
├── .htaccess                 # Tập tin cấu hình Apache (nếu sử dụng Apache)
├── composer.json             # File cấu hình Composer (nếu sử dụng Composer)
└── README.md                 # File README giới thiệu về dự án



Trong cấu trúc thư mục trên:

-public_html: Thư mục này chứa các tập tin mà người dùng có thể truy cập trực tiếp qua web server, bao gồm file index.php và các tập tin tĩnh như CSS, JavaScript và hình ảnh.
-includes: Thư mục này chứa các file include, bao gồm file db_connection.php để kết nối đến cơ sở dữ liệu MySQL sử dụng PDO, và các file khác chứa các hàm và mã PHP tái sử dụng khác.
-config: Thư mục này chứa các tập tin cấu hình, bao gồm file config.php để cấu hình thông tin kết nối MySQL.
-pages: Thư mục này chứa các tập tin PHP cho các trang cụ thể của ứng dụng, chẳng hạn như about.php, contact.php, và các trang khác.
-vendor: Thư mục này chứa các thư viện bên thứ ba nếu sử dụng Composer để quản lý các gói phụ thuộc.
.htaccess, composer.json, README.md: Các file cấu hình và tài liệu khác.