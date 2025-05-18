<?php
/**
 * @package Trần Khánh Nguyên (tester)
 * @author  Trần Khánh Nguyên <www.facebok.com/NguyenCongTuaOoO4>
 */
interface Trần Khánh NguyênConfigInterface {
    public function CommonMethod();
}
class Trần Khánh NguyênHeader implements Trần Khánh NguyênConfigInterface {
    public $title = "Trần Khánh Nguyên | Resources V5";
    public $description = "Hi my name is Trần Khánh Nguyên / A freelance / web developer / vexer";
    public $keywords = "Trần Khánh Nguyên,web Trần Khánh Nguyên,Trần Khánh Nguyên,Trần Khánh Nguyên,wsteam,wusteam,Trần Khánh Nguyên home,profile Trần Khánh Nguyên";
    public $favicon = "./res/v5/img/logo.jpg";
    public $namesite = "Trần Khánh Nguyên | HOME";
    public $avatar = "./res/v5/img/avatar.gif";
    public $userName = ["Hello Everybody", "My name is Trần Khánh Nguyên.", "I really like website design 🌭"];
    public $trigger = "👉 Tìm hiểu tôi 😶&zwj;🌫️";
    public $bio1 = "🤖️ Người đâm mê công nghệ số";
    public $bio2 = "🔍 Chia sẻ và giúp đỡ nhiệt tình";
    public $bio3 = "💻 Kỹ sư phát triển front-end";
    public $bio4 = "Thích làm thần tượng tiktok 🥳";
    public $bio5 = "Ăn, ngủ, làm và chơi game 🎮";
    public $bio6 = "Kẻ khờ dại tin vào tình yêu ✨";
    public $SocialNetworks = [
        "facebook" => "https://facebook.com/NguyenCongTuaOoO4"
        "instagram" => "https://www.instagram.com/pain.kn04"
        "tiktok" => "https://www.tiktok.com/nguyencomeback.dvfb"
    ];
    public function CommonMethod(){date_default_timezone_set('Asia/Japan');}
}


class TrầnKhánhNguyênLoveDays implements TrầnKhánhNguyênConfigInterface {
    public $ConfigLove = [
        "avatar_male" => "https://i.ibb.co/Fbkb9Zj9/z6614192305629-244e935a2a225802a17ce6117eb60827.jpg"
        "name_male" => "Trần Khánh Nguyên", // Thay tên của bạn
        //========================================================//
        "avatar_female" => "https://i.ibb.co/Fbkb9Zj9/z6614192305629-244e935a2a225802a17ce6117eb60827.jpg", // Thay đường dẫn tới thư mục chứa ảnh bạn gái hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_female" => "Trần Khánh Nguyên", // Thay tên đối phương
        //========================================================//
        "time_relashiption" => "30/04/1975" // Định dạng ngày tháng năm: DD-MM-YYYY or / or :
        //========================================================//
    ];
    public function CommonMethod() {}
}
class ThanhDieuMusicList implements ThanhDieuConfigInterface {
    public $songs = [
        [
            "url" => "https://files.catbox.moe/4bjjfg.mp3",
            "avatar" => "https://i.ibb.co/Pt4ZJJd/that-girl-1545280005.jpg",
            "title" => "That Girl",
            "author" => "Olly Murs"
        ],
        [
            "url" => "https://files.catbox.moe/m8b4hr.mp3",
            "avatar" => "https://i.imgur.com/e28b0dD.png",
            "title" => "Thiên Lý Ơi",
            "author" => "Jack ( 5 Triệu )"
        ],
        [
            "url" => "https://files.catbox.moe/yrpft2.mp3",
            "avatar" => "https://i.imgur.com/DAaTklq.png",
            "title" => "Thuỷ Triều",
            "author" => "Quang Hùng MasterD"
        ],
        [
            "url" => "https://files.catbox.moe/jlat9a.mp3",
            "avatar" => "https://i.imgur.com/vp5Vsx5.png",
            "title" => "風立ちぬ ( Gió Nổi )",
            "author" => "周深"
        ],
        [
            "url" => "https://files.catbox.moe/hkqk6x.mp3",
            "avatar" => "https://i.imgur.com/GEOKT8b.png",
            "title" => "Chúng Ta Của Tương Lai",
            "author" => "Sơn Tùng M-TP"
        ],
        [
            "url" => "https://files.catbox.moe/acg0vl.mp3",
            "avatar" => "https://i.ibb.co/MDVY07s/619964de31327dbf8491d14d2c25533f.jpg",
            "title" => "Hoa Cỏ Lau",
            "author" => "Phong Max"
        ],
        [
            "url" => "https://files.catbox.moe/s8opab.mp3",
            "avatar" => "https://i.ibb.co/6R8V7S7/ed0741228ad36870e13624120474e50a.jpg",
            "title" => "Sau Lời Từ Khước",
            "author" => "Phan Mạnh Quỳnh"
        ],
        [
            "url" => "https://files.catbox.moe/gvqgma.mp3",
            "avatar" => "https://i.ibb.co/gvXHBqv/ab67616d0000b273ae85dfd27beee97a3a009f68.jpg",
            "title" => "Em Đã Xa Anh Remix",
            "author" => "Như Việt"
        ],
        [
            "url" => "https://files.catbox.moe/dvjckq.mp3",
            "avatar" => "https://i.ibb.co/VpFyXhS/ab44498b5b432879428719390baf1180-1490064587.jpg",
            "title" => "Anh Đã Quen Với Cô Đơn",
            "author" => "Soobin Hoàng Sơn"
        ],
        // Thêm nhạc tại đây
    ];
    public function CommonMethod() {}
}
