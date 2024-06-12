jQuery(document).ready(function($) {
    $('#billing_country').change(function() {
        let country = $(this).val();
        
        let options = {};
        switch (country) {
            case 'JP':
                options = {
                    'tokyo':     'Tokyo',
                    'osaka':     'Osaka',
                    'kyoto':     'Kyoto',
                    'nagoya':    'Nagoya',
                    'sapporo':   'Sapporo',
                    'fukuoka':   'Fukuoka',
                    'hiroshima': 'Hiroshima',
                    'sendai':    'Sendai',
                    'kobe':      'Kobe',
                    'naha':      'Naha',
                    'kanazawa':  'Kanazawa',
                    'nara':      'Nara',
                    'kumamoto':  'Kumamoto',
                    'okayama':   'Okayama',
                    'kochi':     'Kochi',
                    'matsumoto': 'Matsumoto',
                    'kagoshima': 'Kagoshima',
                    'takamatsu': 'Takamatsu',
                    'matsuyama': 'Matsuyama',
                    'shizuoka':  'Shizuoka',
                    'aomori':    'Aomori',
                    'fukui':     'Fukui',
                    'gifu':      'Gifu',
                    'akita':     'Akita',
                    'yokohama':  'Yokohama',
                    'kawasaki':  'Kawasaki',
                    'saitama':   'Saitama',
                    'chiba':     'Chiba',
                    'aichi':     'Aichi',
                    'shizuoka':  'Shizuoka',
                    'kanagawa':  'Kanagawa',
                    'ibaraki':   'Ibaraki',
                    'tochigi':   'Tochigi',
                    'gunma':     'Gunma',
                    'niigata':   'Niigata',
                    'toyama':    'Toyama',
                    'ishikawa':  'Ishikawa',
                    'fukushima': 'Fukushima',
                    'miyagi':    'Miyagi',
                    'yamagata':  'Yamagata',
                    'iwate':     'Iwate',
                    'akita':     'Akita',
                    'hokkaido':  'Hokkaido',
                    'shimane':   'Shimane',
                    'tottori':   'Tottori',
                    'hiroshima': 'Hiroshima',
                    'yamaguchi': 'Yamaguchi',
                    'tokushima': 'Tokushima',
                    'kagawa':    'Kagawa',
                    'ehime':     'Ehime',
                    'kochi':     'Kochi',
                    'fukuoka':   'Fukuoka',
                    'oita':      'Oita',
                    'miyazaki':  'Miyazaki',
                    'kumamoto':  'Kumamoto',
                    'nagasaki':  'Nagasaki',
                    'saga':      'Saga',
                    'okinawa':   'Okinawa',
                };
                break;
            case 'TW':
                options = {
                    'taipei':     'Taipei',
                    'new_taipei': 'New Taipei',
                    'taoyuan':    'Taoyuan',
                    'hsinchu':    'Hsinchu',
                    'miaoli':     'Miaoli',
                    'taichung':   'Taichung',
                    'changhua':   'Changhua',
                    'nantou':     'Nantou',
                    'yunlin':     'Yunlin',
                    'chiayi':     'Chiayi',
                    'tainan':     'Tainan',
                    'kaohsiung':  'Kaohsiung',
                    'pingtung':   'Pingtung',
                    'taitung':    'Taitung',
                    'hua':        'Hualien',
                    'yilan':      'Yilan',
                    'penghu':     'Penghu',
                    'keelung':    'Keelung',
                    'jinmen':     'Jinmen',
                    'lienchiang': 'Lienchiang',
                };
                break;
            default:
                break;
        }
        
        let inner_html = '';
        Object.keys(options).forEach(key => {
            inner_html += `<option value="${key}">${options[key]}</option>`;
        });

        $('#billing_city').html(inner_html);
    });
});
