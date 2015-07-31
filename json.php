<?php
    $listText = [
        "Nguyễn Văn Giáp",
        "Keny Sang",
        "Hồ Ngọc Hà",
        "Đàm Vĩnh Hưng",
        "Sơn Tùng Mông Tớ Phẳng",
        "Cường Seven Up",
        "Trần Văn Tú"
    ];
    
    echo $listText[rand(0, count($listText) - 1)];