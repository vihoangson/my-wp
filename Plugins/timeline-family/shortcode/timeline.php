<?php
// gray-bg
// white-bg
// navy-bg
// blue-bg
// lazur-bg
// yellow-bg
// red-bg
// black-bg

$data = [
    [
        'icon' => 'fas fa-umbrella-beach',
        'date' => '1/2019',
        'time' => date('Y')-'2019'!=0?date('Y')-'2019'.' năm trước':'Năm nay',
        'title'   => 'Lần đầu tiên đi chơi sau khi có Kem',
        'content' => 'Hồ Tràm - Bà Rịa Vũng Tàu<br><img src="http://vihoangson.com/my/wp-content/uploads/2019/10/20191005_124502-COLLAGE.jpg">',
        'button-more' => false,
        'button-more-link' => '/',
        'bg-icon' => 'navy-bg',

    ],
    [
        'icon' => 'fas fa-home',
        'date' => '7/2019',
        'time' => date('Y')-'2019'!=0?date('Y')-'2019'.' năm trước':'Năm nay',
        'title'   => 'Dọn sang nhà mới',
        'content' => 'Quận Bình Tân',
        'button-more' => false,
        'button-more-link' => '/',
        'bg-icon' => 'yellow-bg',
    ],
        [
        'icon' => 'fas fa-baby',
        'date' => '1/2016',
        'time' => date('Y')-'2016'!=0?date('Y')-'2016'.' năm trước':'Năm nay',
        'title'   => 'Sinh Kem',
        'content' => 'Bệnh viên ngoại sản Tây Nguyên',
        'button-more' => false,
        'button-more-link' => '/',
        'bg-icon' => 'red-bg',
    ],

    [
        'icon' => 'fas fa-umbrella-beach',
        'date' => '12/12/2015',
        'time' => date('Y')-'2015'!=0?date('Y')-'2015'.' năm trước':'Năm nay',
        'title'   => 'Đi nghỉ tại Đà Lạt',
        'content' => 'Terracota',
        'button-more' => true,
        'button-more-link' => 'https://photos.google.com/share/AF1QipP76MStaOMKeWr6TlzSwRzCNMH4ShNvncivRGoHRFtHV0gJhS931E0yir4z2F1nmQ?key=cDdmOERndW5kRlFLSkMyWnl3NWhlekw0VHpCYk9n',
        'bg-icon' => 'navy-bg',
    ],

        [
        'icon' => 'fas fa-hiking',
        'date' => '9/2015',
        'time' => date('Y')-'2015'!=0?date('Y')-'2015'.' năm trước':'Năm nay',
        'title'   => 'Leo Thất Sơn',
        'content' => 'Thất Sơn - An Giang',
        'button-more' => true,
        'button-more-link' => 'https://photos.google.com/share/AF1QipNAmVHctuZ7oKmu01xMXge-f_8ZbpqxESfS6QRBt49gcPp9Hf_yw9MxIOvfcnt63Q?key=TGxucEpjXzVhX21JMlFnbjc1akZZc24yN2tZdml3',
        'bg-icon' => 'navy-bg',
    ],
    [
        'icon' => 'fas fa-ring',
        'date' => '1/2013',
        'time' => date('Y')-'2013'.' năm trước',
        'title'   => 'Đám cưới',
        'content' => 'Tại quận 6 Tp.HCM',
        'button-more' => true,
        'button-more-link' => 'https://photos.google.com/album/AF1QipM4D6eZTLn9GqtB6_XM8T_uCM5FHqW6ZHBK0L9m',
        'bg-icon' => 'yellow-bg',
    ],
    [
        'icon' => 'fa fa-eye',
        'date' => '4/2011',
        'time' => date('Y')-'2011'.' năm trước',
        'title'   => 'Lần đầu tiên gặp nhau',
        'content' => 'Hoàng tử bé',
        'button-more' => false,
        'button-more-link' => '/',
        'bg-icon' => 'yellow-bg',
    ],
];
?>
<div class="ibox-content" id="ibox-content">
    <div id="vertical-timeline" class="vertical-container dark-timeline center-orientation">
        <?php
        foreach ($data as $v) {
            ?>
            <div class="vertical-timeline-block">
                <div class="vertical-timeline-icon <?=$v['bg-icon']?>">
                    <i class="<?=$v['icon']?>"></i>
                </div>
                <div class="vertical-timeline-content">
                    <h2><?=$v['title']?></h2>
                    <p><?=$v['content']?></p>
                    <?php if($v['button-more'] == true){
                        ?>
                        <a href="<?=$v['button-more-link']?>" class="btn btn-sm btn-primary" target="_blank"> More info</a>
                        <?php
                    }?>
                    <span class="vertical-date"><?=$v['date']?> <br><small><?=$v['time']?></small></span>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
