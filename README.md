# WordPress Multisite - Network Site Stats Plugin

**Bài tập:** Cấu hình mạng lưới website và viết Plugin quản lý tập trung

## 👨‍🎓 Thông tin sinh viên

- **Họ và tên:** Nguyễn Văn Hiếu
- **Mã sinh viên:** 23810310112
- **Email:** nguyenhieudocla123a@gmail.com

## 📋 Mô tả dự án

Plugin **Network Site Stats** giúp Super Admin theo dõi và quản lý tất cả các trang web con trong mạng lưới WordPress Multisite.

## ✨ Tính năng

- ✅ Hiển thị danh sách tất cả sites trong mạng lưới
- ✅ Thống kê số lượng bài viết của từng site
- ✅ Hiển thị ngày đăng bài mới nhất
- ✅ Giao diện đẹp, dễ sử dụng trong Network Admin

## 📁 Cấu trúc dự án

```
.
├── network-site-stats/              # Plugin
│   └── network-site-stats.php       # File chính
├── mysite_db.sql                    # Database gốc
├── database_NguyenVanHieu_23810310112.sql  # Database có thông tin SV
├── wordpress_multisite_report.docx  # Báo cáo
└── README.md                        # File này
```

## 🚀 Hướng dẫn cài đặt

### Bước 1: Kích hoạt Multisite

Thêm vào `wp-config.php`:

```php
define('WP_ALLOW_MULTISITE', true);
```

### Bước 2: Cài đặt Network

1. Vào **Tools > Network Setup**
2. Chọn **Sub-directories**
3. Làm theo hướng dẫn cập nhật `wp-config.php` và `.htaccess`

### Bước 3: Import Database

```bash
mysql -u root -p mysite_db < mysite_db.sql
```

### Bước 4: Cài Plugin

1. Copy thư mục `network-site-stats` vào `wp-content/plugins/`
2. Vào **Network Admin > Plugins**
3. Click **Network Activate**

### Bước 5: Xem kết quả

Vào **Network Admin > Site Stats**

## 🔧 Các hàm quan trọng

| Hàm | Mục đích |
|-----|----------|
| `get_sites()` | Lấy danh sách tất cả sites |
| `switch_to_blog($id)` | Chuyển ngữ cảnh sang site khác |
| `restore_current_blog()` | Khôi phục về site ban đầu |
| `wp_count_posts()` | Đếm số bài viết |
| `get_posts()` | Lấy danh sách bài viết |

## 📊 Kết quả

Plugin hiển thị bảng thống kê với các cột:
- Site ID
- Site Name
- Post Count (Số bài viết)
- Latest Post (Bài viết mới nhất)

## 🛠️ Yêu cầu

- WordPress 5.0+
- PHP 7.4+
- WordPress Multisite được kích hoạt
- Quyền Super Admin

## 📝 License

GPL v2 or later

## 👤 Tác giả

**Nguyễn Văn Hiếu**
- MSV: 23810310112
- Email: nguyenhieudocla123a@gmail.com

---

**Ngày hoàn thành:** Tháng 4/2026
