<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'id' => 1,
            'code' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 2
        ]);
        $users = [
            [
                "id" => 87,
                "username" => "anhnh2",
                "firstName" => "Anh",
                "lastName" => "Nguyễn Hữu",
                "avatar" => null
            ],
            [
                "id" => 94,
                "username" => "nguyetnt1",
                "firstName" => "Nguyệt",
                "lastName" => "Nguyễn Thị",
                "avatar" => null
            ],
            [
                "id" => 64,
                "username" => "camhm",
                "firstName" => "Cầm",
                "lastName" => "Hoàng Mạnh",
                "avatar" => null
            ],
            [
                "id" => 95,
                "username" => "chienlv",
                "firstName" => "Chiến",
                "lastName" => "Lê Văn",
                "avatar" => null
            ],
            [
                "id" => 83,
                "username" => "datpv",
                "firstName" => "Đạt",
                "lastName" => "Phan Văn",
                "avatar" => null
            ],
            [
                "id" => 91,
                "username" => "haipt",
                "firstName" => "Hải",
                "lastName" => "Phan Thu",
                "avatar" => "https://ron.nal.vn/api/files/avatar_haipt_10995940_945173048828398_3349807125314183359_o.jpg"
            ],
            [
                "id" => 98,
                "username" => "hieudx",
                "firstName" => "Hiếu",
                "lastName" => "Đoàn Xuân",
                "avatar" => "https://ron.nal.vn/api/files/avatar_hieudx_gd.jpeg"
            ],
            [
                "id" => 88,
                "username" => "huyenpt",
                "firstName" => "Huyền",
                "lastName" => "Phan Thị",
                "avatar" => null
            ],
            [
                "id" => 113,
                "username" => "lanbt",
                "firstName" => "Lan",
                "lastName" => "Bùi Thị",
                "avatar" => null
            ],
            [
                "id" => 75,
                "username" => "lynth",
                "firstName" => "Ly",
                "lastName" => "Nguyễn Thị Hương",
                "avatar" => null
            ],
            [
                "id" => 35,
                "username" => "maiht",
                "firstName" => "Mai",
                "lastName" => "Hoàng Thị",
                "avatar" => null
            ],
            [
                "id" => 61,
                "username" => "namnd",
                "firstName" => "Nam",
                "lastName" => "Nguyễn Đình",
                "avatar" => null
            ],
            [
                "id" => 110,
                "username" => "namnp",
                "firstName" => "Nam",
                "lastName" => "Nguyễn Phương",
                "avatar" => "https://ron.nal.vn/api/files/avatar_namnp_5BF6E121-045B-4190-B6FD-259B5DF4DCB3.jpeg"
            ],
            [
                "id" => 96,
                "username" => "thend",
                "firstName" => "Thế",
                "lastName" => "Nguyễn Duy",
                "avatar" => null
            ],
            [
                "id" => 69,
                "username" => "thuannd1",
                "firstName" => "Thuận",
                "lastName" => "Nguyễn Đức",
                "avatar" => null
            ],
            [
                "id" => 100,
                "username" => "tungnn",
                "firstName" => "Tùng",
                "lastName" => "Nguyễn Ngọc",
                "avatar" => null
            ],
            [
                "id" => 58,
                "username" => "vietvv",
                "firstName" => "Việt",
                "lastName" => "Vũ Văn",
                "avatar" => "https://ron.nal.vn/api/files/avatar_vietvv_maguire-7-2212109.jpeg"
            ],
            [
                "id" => 77,
                "username" => "vutv",
                "firstName" => "Vũ",
                "lastName" => "Trần Văn",
                "avatar" => null
            ],
            [
                "id" => 62,
                "username" => "anhnh",
                "firstName" => "Anh",
                "lastName" => "Nguyễn Hồng",
                "avatar" => null
            ],
            [
                "id" => 93,
                "username" => "linhltm",
                "firstName" => "Linh",
                "lastName" => "Lê Thị Mai",
                "avatar" => "https://ron.nal.vn/api/files/avatar_linhltm_cuc.jpg"
            ],
            [
                "id" => 114,
                "username" => "maibn",
                "firstName" => "Mai",
                "lastName" => "Bùi Ngọc",
                "avatar" => "https://ron.nal.vn/api/files/avatar_maibn_image.png"
            ],
            [
                "id" => 8,
                "username" => "thanglh",
                "firstName" => "Thắng",
                "lastName" => "Lê Hoàng",
                "avatar" => null
            ],
            [
                "id" => 19,
                "username" => "datnx",
                "firstName" => "Đạt",
                "lastName" => "Nguyễn Xuân",
                "avatar" => null
            ],
            [
                "id" => 123,
                "username" => "ducnm",
                "firstName" => "Đức",
                "lastName" => "Nguyễn Minh",
                "avatar" => null
            ],
            [
                "id" => 59,
                "username" => "dungnb",
                "firstName" => "Dũng",
                "lastName" => "Nguyễn Bá",
                "avatar" => null
            ],
            [
                "id" => 7,
                "username" => "hangptt",
                "firstName" => "Hằng",
                "lastName" => "Phan Thị Thu",
                "avatar" => null
            ],
            [
                "id" => 45,
                "username" => "hoangpm1",
                "firstName" => "Hoàng",
                "lastName" => "Phạm Minh",
                "avatar" => null
            ],
            [
                "id" => 25,
                "username" => "linhnp",
                "firstName" => "Linh",
                "lastName" => "Nguyễn Phi",
                "avatar" => "https://ron.nal.vn/api/files/avatar_linhnp_cd67d9d0d78010de4991.jpg"
            ],
            [
                "id" => 37,
                "username" => "ngant",
                "firstName" => "Nga",
                "lastName" => "Ngô Thị",
                "avatar" => null
            ],
            [
                "id" => 116,
                "username" => "quangnv",
                "firstName" => "Quang",
                "lastName" => "Ngô Văn",
                "avatar" => null
            ],
            [
                "id" => 265,
                "username" => "sonpt",
                "firstName" => "Sơn",
                "lastName" => "Phan Thanh",
                "avatar" => null
            ],
            [
                "id" => 50,
                "username" => "thaontp1",
                "firstName" => "Thảo",
                "lastName" => "Nguyễn Thị Phương",
                "avatar" => "https://ron.nal.vn/api/files/avatar_thaontp1_chibi maruko.jpeg"
            ],
            [
                "id" => 105,
                "username" => "thaott",
                "firstName" => "Thảo",
                "lastName" => "Trịnh Thị",
                "avatar" => null
            ],
            [
                "id" => 261,
                "username" => "thenv",
                "firstName" => "Thể",
                "lastName" => "Nguyễn Văn",
                "avatar" => null
            ],
            [
                "id" => 57,
                "username" => "anhvd",
                "firstName" => "Anh",
                "lastName" => "Vương Đức",
                "avatar" => null
            ],
            [
                "id" => 23,
                "username" => "cuongtm",
                "firstName" => "Cường",
                "lastName" => "Trần Mạnh",
                "avatar" => null
            ],
            [
                "id" => 55,
                "username" => "datnv",
                "firstName" => "Đạt",
                "lastName" => "Nguyễn Văn",
                "avatar" => "https://ron.nal.vn/api/files/avatar_datnv_batman.jpeg"
            ],
            [
                "id" => 268,
                "username" => "kiennt",
                "firstName" => "Kiên",
                "lastName" => "Nguyễn Trung",
                "avatar" => null
            ],
            [
                "id" => 81,
                "username" => "namdq",
                "firstName" => "Nam",
                "lastName" => "Đỗ Quang",
                "avatar" => null
            ],
            [
                "id" => 47,
                "username" => "ngocnm",
                "firstName" => "Ngọc",
                "lastName" => "Nguyễn Minh",
                "avatar" => null
            ],
            [
                "id" => 4,
                "username" => "thongnh",
                "firstName" => "Thông",
                "lastName" => "Nguyễn Huy",
                "avatar" => null
            ],
            [
                "id" => 108,
                "username" => "thuyht",
                "firstName" => "Thủy",
                "lastName" => "Hoàng Thị",
                "avatar" => null
            ],
            [
                "id" => 24,
                "username" => "hienvt",
                "firstName" => "Hiền",
                "lastName" => "Vũ Thị",
                "avatar" => null
            ],
            [
                "id" => 5,
                "username" => "tamnm",
                "firstName" => "Tâm",
                "lastName" => "Nguyễn Minh",
                "avatar" => "https://ron.nal.vn/api/files/avatar_tamnm_PXL_20221212_235216281 (1).jpg"
            ],
            [
                "id" => 31,
                "username" => "thangnm",
                "firstName" => "Thắng",
                "lastName" => "Nguyễn Mạnh",
                "avatar" => null
            ],
            [
                "id" => 112,
                "username" => "thaont1",
                "firstName" => "THAO",
                "lastName" => "NGUYỄN THỊ",
                "avatar" => null
            ],
            [
                "id" => 66,
                "username" => "cuongvm",
                "firstName" => "Cường",
                "lastName" => "Vũ Mạnh",
                "avatar" => "https://ron.nal.vn/api/files/avatar_cuongvm_cuongvm.png"
            ],
            [
                "id" => 54,
                "username" => "giangvnh",
                "firstName" => "Giang",
                "lastName" => "Vương Ngô Hương",
                "avatar" => null
            ],
            [
                "id" => 12,
                "username" => "lan",
                "firstName" => "Lân",
                "lastName" => "Phạm Mạnh",
                "avatar" => null
            ],
            [
                "id" => 11,
                "username" => "nam",
                "firstName" => "Nam",
                "lastName" => "Lê Hoàng",
                "avatar" => null
            ],
            [
                "id" => 15,
                "username" => "nghia",
                "firstName" => "Nghĩa",
                "lastName" => "Nguyễn Trọng",
                "avatar" => null
            ],
            [
                "id" => 264,
                "username" => "huyenpt1",
                "firstName" => "Huyền",
                "lastName" => "Phan Thanh",
                "avatar" => null
            ],
            [
                "id" => 41,
                "username" => "liendtm",
                "firstName" => "Liên",
                "lastName" => "Dương Thị Mai",
                "avatar" => "https://ron.nal.vn/api/files/avatar_liendtm_ảnh chị Liên.jpeg"
            ],
            [
                "id" => 26,
                "username" => "phuongdm",
                "firstName" => "Phương",
                "lastName" => "Dương Minh",
                "avatar" => null
            ],
            [
                "id" => 90,
                "username" => "thott",
                "firstName" => "Thơ",
                "lastName" => "Trần Thị",
                "avatar" => null
            ],
            [
                "id" => 22,
                "username" => "vanntv",
                "firstName" => "Vân",
                "lastName" => "Nguyễn Thị Vân",
                "avatar" => null
            ],
            [
                "id" => 124,
                "username" => "dieptn",
                "firstName" => "Điệp ",
                "lastName" => "Trương Ngọc",
                "avatar" => null
            ],
            [
                "id" => 16,
                "username" => "hant",
                "firstName" => "Hà",
                "lastName" => "Nguyễn Thị",
                "avatar" => null
            ],
            [
                "id" => 17,
                "username" => "hiepnq",
                "firstName" => "Hiệp",
                "lastName" => "Nguyễn Quang",
                "avatar" => null
            ],
            [
                "id" => 29,
                "username" => "hungtt",
                "firstName" => "Hưng",
                "lastName" => "Trần Tuấn",
                "avatar" => "https://ron.nal.vn/api/files/avatar_hungtt_test.png"
            ],
            [
                "id" => 39,
                "username" => "longdh",
                "firstName" => "Long",
                "lastName" => "Đỗ Hoàng",
                "avatar" => "https://ron.nal.vn/api/files/avatar_longdh_licorice-auth.png"
            ],
            [
                "id" => 18,
                "username" => "namnv1",
                "firstName" => "Nam",
                "lastName" => "Nguyễn Văn",
                "avatar" => null
            ],
            [
                "id" => 44,
                "username" => "noida",
                "firstName" => "Nội",
                "lastName" => "Đỗ Anh",
                "avatar" => "https://ron.nal.vn/api/files/avatar_noida_167241156256e66a729082611e_Arsenal-FC-icon.png"
            ],
            [
                "id" => 109,
                "username" => "thanhbt",
                "firstName" => "Thanh",
                "lastName" => "Bùi Tuấn",
                "avatar" => null
            ],
            [
                "id" => 65,
                "username" => "thucdx1",
                "firstName" => "Thực",
                "lastName" => "Đỗ Xuân",
                "avatar" => "https://ron.nal.vn/api/files/avatar_thucdx1_callout-logo.png"
            ],
            [
                "id" => 40,
                "username" => "truongnt",
                "firstName" => "Trường",
                "lastName" => "Nguyễn Trung",
                "avatar" => "https://ron.nal.vn/api/files/avatar_truongnt_pomodoro-timer-icon.png"
            ],
            [
                "id" => 49,
                "username" => "tuyetnt",
                "firstName" => "Tuyết",
                "lastName" => "Nguyễn Thị",
                "avatar" => null
            ],
            [
                "id" => 106,
                "username" => "viettd",
                "firstName" => "Việt",
                "lastName" => "Trần Duy",
                "avatar" => null
            ],
            [
                "id" => 67,
                "username" => "anhddq",
                "firstName" => "Anh",
                "lastName" => "Đỗ Đình Quang",
                "avatar" => "https://ron.nal.vn/api/files/avatar_anhddq_ghost_1f47b.png"
            ],
            [
                "id" => 76,
                "username" => "hungbp",
                "firstName" => "Hùng",
                "lastName" => "Bùi Phi",
                "avatar" => null
            ],
            [
                "id" => 32,
                "username" => "hungnt",
                "firstName" => "Hùng",
                "lastName" => "Nguyễn Thế",
                "avatar" => null
            ],
            [
                "id" => 48,
                "username" => "maint",
                "firstName" => "Mai",
                "lastName" => "Ngô Thị",
                "avatar" => "https://ron.nal.vn/api/files/avatar_maint_Fantasy-Girl-4K.jpeg"
            ],
            [
                "id" => 86,
                "username" => "hiennt1",
                "firstName" => "Hiền",
                "lastName" => "Nguyễn Thị",
                "avatar" => null
            ],
            [
                "id" => 6,
                "username" => "huongmt",
                "firstName" => "Hương",
                "lastName" => "Mai Thị",
                "avatar" => null
            ],
            [
                "id" => 85,
                "username" => "linhptd",
                "firstName" => "Linh",
                "lastName" => "Phan Thị Diệu",
                "avatar" => null
            ],
            [
                "id" => 99,
                "username" => "oanhntk",
                "firstName" => "Oanh",
                "lastName" => "Nguyễn Thị Kim",
                "avatar" => null
            ],
            [
                "id" => 103,
                "username" => "thaohtp",
                "firstName" => "Thảo",
                "lastName" => "Hoàng Thị Phương",
                "avatar" => null
            ],
            [
                "id" => 51,
                "username" => "antt",
                "firstName" => "An",
                "lastName" => "Trần Thanh",
                "avatar" => "https://ron.nal.vn/api/files/avatar_antt_download.png"
            ],
            [
                "id" => 43,
                "username" => "haontt",
                "firstName" => "Hảo",
                "lastName" => "Nguyễn Thị Thanh",
                "avatar" => "https://ron.nal.vn/api/files/avatar_haontt_318291444_822223152412165_7169711333688519496_n.jpeg"
            ],
            [
                "id" => 79,
                "username" => "hunglv",
                "firstName" => "Hùng",
                "lastName" => "Lê Việt",
                "avatar" => "https://ron.nal.vn/api/files/avatar_hunglv_Screen Shot 2022-12-03 at 12.45.40.png"
            ],
            [
                "id" => 21,
                "username" => "maivt",
                "firstName" => "Mai",
                "lastName" => "Vũ Thị",
                "avatar" => "https://ron.nal.vn/api/files/avatar_maivt_download.jpeg"
            ],
            [
                "id" => 53,
                "username" => "ngannt",
                "firstName" => "Ngân",
                "lastName" => "Nguyễn Trang",
                "avatar" => "https://ron.nal.vn/api/files/avatar_ngannt_webpc.png"
            ],
            [
                "id" => 269,
                "username" => "sonlbn",
                "firstName" => "Sơn",
                "lastName" => "Lê Bùi Ngọc",
                "avatar" => null
            ],
            [
                "id" => 30,
                "username" => "sonnth",
                "firstName" => "Sơn",
                "lastName" => "Nguyễn Tất Hoàng",
                "avatar" => "https://ron.nal.vn/api/files/avatar_sonnth_IMG_9890.jpeg"
            ],
            [
                "id" => 38,
                "username" => "thanhch",
                "firstName" => "Thành",
                "lastName" => "Cát Huy",
                "avatar" => "https://ron.nal.vn/api/files/avatar_thanhch_316313392_1554461631659550_7658547579374082876_n.jpeg"
            ],
            [
                "id" => 42,
                "username" => "toannh",
                "firstName" => "Toàn",
                "lastName" => "Nguyễn Huy",
                "avatar" => "https://ron.nal.vn/api/files/avatar_toannh_310621876_1472380486596021_2594448313902480294_n.jpg"
            ],
            [
                "id" => 84,
                "username" => "anhdq",
                "firstName" => "Anh",
                "lastName" => "Đặng Quang",
                "avatar" => null
            ],
            [
                "id" => 72,
                "username" => "canhnt",
                "firstName" => "Cảnh",
                "lastName" => "Nguyễn Trọng",
                "avatar" => null
            ],
            [
                "id" => 36,
                "username" => "dungnt",
                "firstName" => "Dung",
                "lastName" => "Nguyễn Thị",
                "avatar" => null
            ],
            [
                "id" => 266,
                "username" => "hainv1",
                "firstName" => "Hải",
                "lastName" => "Nguyễn Văn",
                "avatar" => null
            ],
            [
                "id" => 68,
                "username" => "huanlx",
                "firstName" => "Huấn",
                "lastName" => "Lê Xuân",
                "avatar" => null
            ],
            [
                "id" => 80,
                "username" => "huannt",
                "firstName" => "Huấn",
                "lastName" => "Nguyễn Tiến",
                "avatar" => null
            ],
            [
                "id" => 70,
                "username" => "khanhnv1",
                "firstName" => "Khánh",
                "lastName" => "Nguyễn Văn",
                "avatar" => null
            ],
            [
                "id" => 111,
                "username" => "laidt",
                "firstName" => "LÀI",
                "lastName" => "ĐẬU THỊ",
                "avatar" => null
            ],
            [
                "id" => 60,
                "username" => "ninhnh",
                "firstName" => "Ninh",
                "lastName" => "Nguyễn Hà",
                "avatar" => null
            ],
            [
                "id" => 74,
                "username" => "thainv1",
                "firstName" => "Thái",
                "lastName" => "Nguyễn Viết",
                "avatar" => null
            ],
            [
                "id" => 82,
                "username" => "thangtv",
                "firstName" => "Thắng",
                "lastName" => "Trần Việt",
                "avatar" => null
            ],
            [
                "id" => 115,
                "username" => "thugth",
                "firstName" => "Thu",
                "lastName" => "Giang Thị Hà",
                "avatar" => null
            ],
            [
                "id" => 2,
                "username" => "trangvtt",
                "firstName" => "Trang",
                "lastName" => "Vũ Thị Thu",
                "avatar" => null
            ],
            [
                "id" => 78,
                "username" => "tungbq",
                "firstName" => "Tùng",
                "lastName" => "Bùi Quang",
                "avatar" => null
            ],
            [
                "id" => 126,
                "username" => "tungcd",
                "firstName" => "Tùng",
                "lastName" => "Cao Duy",
                "avatar" => null
            ],
            [
                "id" => 33,
                "username" => "hieuhs",
                "firstName" => "Hiếu",
                "lastName" => "Hồ Sỹ",
                "avatar" => null
            ],
            [
                "id" => 3,
                "username" => "thuongln",
                "firstName" => "Thương",
                "lastName" => "Lê Ngọc",
                "avatar" => "https://ron.nal.vn/api/files/avatar_thuongln_image (2).png"
            ],
            [
                "id" => 102,
                "username" => "mynth",
                "firstName" => "My",
                "lastName" => "Nguyễn Thị Hà",
                "avatar" => null
            ],
            [
                "id" => 118,
                "username" => "xuanntt",
                "firstName" => "Xuân",
                "lastName" => "Nguyễn Thị Thanh",
                "avatar" => null
            ],
            [
                "id" => 13,
                "username" => "ducnn",
                "firstName" => "Đức",
                "lastName" => "Nguyễn Ngọc",
                "avatar" => null
            ],
            [
                "id" => 120,
                "username" => "dungnd",
                "firstName" => "Dũng",
                "lastName" => "Nguyễn Danh",
                "avatar" => "https://ron.nal.vn/api/files/avatar_dungnd_4dbbbf6b3b4dff13a65c.jpg"
            ],
            [
                "id" => 101,
                "username" => "linhnt3",
                "firstName" => "Linh",
                "lastName" => "Nguyễn Thế",
                "avatar" => "https://ron.nal.vn/api/files/avatar_linhnt3_hacker.png"
            ],
            [
                "id" => 27,
                "username" => "lytth",
                "firstName" => "Ly",
                "lastName" => "Trần Thị Hương",
                "avatar" => null
            ],
            [
                "id" => 20,
                "username" => "minhnt",
                "firstName" => "Minh",
                "lastName" => "Nguyễn Thế",
                "avatar" => "https://ron.nal.vn/api/files/avatar_minhnt_ve-lai-canh-dong-tuoi-nho-3_07122021115025.jpg"
            ],
            [
                "id" => 46,
                "username" => "nghiabt",
                "firstName" => "Nghĩa",
                "lastName" => "Bùi Trung",
                "avatar" => "https://ron.nal.vn/api/files/avatar_nghiabt_images.jpeg"
            ],
            [
                "id" => 125,
                "username" => "phuongnv",
                "firstName" => "Phương",
                "lastName" => "Ngô Văn",
                "avatar" => null
            ],
            [
                "id" => 63,
                "username" => "tuyendv",
                "firstName" => "Tuyến",
                "lastName" => "Đồng Văn",
                "avatar" => "https://ron.nal.vn/api/files/avatar_tuyendv_305760734_2939687072844041_8054659364601648523_n.jpeg"
            ],
            [
                "id" => 28,
                "username" => "anhhq",
                "firstName" => "Anh",
                "lastName" => "Hoàng Quỳnh",
                "avatar" => null
            ],
            [
                "id" => 104,
                "username" => "cautm",
                "firstName" => "Cầu",
                "lastName" => "Trần Minh",
                "avatar" => null
            ],
            [
                "id" => 97,
                "username" => "giangbh",
                "firstName" => "Giang",
                "lastName" => "Bùi Hương",
                "avatar" => null
            ],
            [
                "id" => 9,
                "username" => "haonm",
                "firstName" => "Hào",
                "lastName" => "Nguyễn Mạnh",
                "avatar" => null
            ],
            [
                "id" => 10,
                "username" => "huongnt1",
                "firstName" => "Hương",
                "lastName" => "Nguyễn Thị",
                "avatar" => null
            ],
            [
                "id" => 56,
                "username" => "huytd",
                "firstName" => "Huy",
                "lastName" => "Trịnh Đức",
                "avatar" => null
            ],
            [
                "id" => 71,
                "username" => "minhtth",
                "firstName" => "Minh",
                "lastName" => "Trương Thị Hồng",
                "avatar" => null
            ],
            [
                "id" => 107,
                "username" => "nhannlv",
                "firstName" => "Nhân",
                "lastName" => "Nguyễn Lê Vĩ",
                "avatar" => "https://ron.nal.vn/api/files/avatar_nhannlv_avatar_cty.jpg"
            ],
            [
                "id" => 34,
                "username" => "phuonglk",
                "firstName" => "Phương",
                "lastName" => "Lê Khắc",
                "avatar" => null
            ],
            [
                "id" => 92,
                "username" => "thudta",
                "firstName" => "Thư",
                "lastName" => "Đào Thị Anh",
                "avatar" => null
            ],
            [
                "id" => 117,
                "username" => "tientq",
                "firstName" => "Tiến",
                "lastName" => "Tạ Quang",
                "avatar" => null
            ],
            [
                "id" => 73,
                "username" => "tuanlv",
                "firstName" => "Tuấn",
                "lastName" => "Lê Văn",
                "avatar" => null
            ],
            [
                "id" => 14,
                "username" => "tunn",
                "firstName" => "Tú",
                "lastName" => "Nguyễn Ngọc",
                "avatar" => null
            ],
            [
                "id" => 52,
                "username" => "vietbd",
                "firstName" => "Việt",
                "lastName" => "Bùi Đức",
                "avatar" => "https://ron.nal.vn/api/files/avatar_vietbd_turning-red-2.jpeg"
            ],
        ];

        foreach($users as $user) {
            User::factory()->create([
                'id' => $user['id'],
                'code' => $user['username'],
                'name' => $user['lastName'] .' '. $user['firstName'],
                'avatar' => $user['avatar'],
                'gender' => strpos('Thị', $user['lastName']) ? 2: 1
            ]);
        }
    }
}