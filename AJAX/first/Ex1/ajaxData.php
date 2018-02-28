<?php
$data = array();
$data['vleague'] = '(Dân trí) - Vụ việc quyền Chủ tịch CLB TP HCM Lê Công Vinh đòi tự bỏ tiền thuê trọng tài ngoại điều khiển các trận đấu tại V-League nhận được sự quan tâm đặc biệt của dư luận. Tuy nhiên chắc chắn rằng VFF, VPF và Ban trọng tài sẽ không đồng ý với đề xuất này.'; 
$data['premierLeague'] = '(Dân trí) - Ở vòng 8 Premier League, Man City thi đấu rất thăng hoa khi ghi tới bảy bàn thắng vào lưới Stoke, bởi thế khá đông cầu thủ của đội bóng này đã có mặt ở đội hình tiêu biểu vòng 8 Premier League.';
$data['league1'] = '(Dân trí) - Trong trận đấu giữa giữa Lille và Troyes tại Ligue 1 vào đêm qua đã xảy ra một tình huống "cười ra nước mắt" khi trọng tài chính điều khiển trận đấu rút thẻ đỏ đuổi nhầm người...';

echo "<pre>";
print_r($data[$_GET['key']]);
echo "</pre>";
?>