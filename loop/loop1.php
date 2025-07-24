<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FirstTime</title>
</head>
<body>
<?php
$students = [
    ['name' => 'นายจุฬาลักษณ์', 'lastname' => 'คงจรูญ', 'room' => '6/9'],
    ['name' => 'นายไตรคูน', 'lastname' => 'บุญนํา', 'room' => '6/9'],
    ['name' => 'นายวรนาศักดิ์', 'lastname' => 'เกียรติพิเชฐชื่น', 'room' => '6/9'],
    ['name' => 'นายนนทวัฒน์', 'lastname' => 'ขําดวง', 'room' => '6/9'],
    ['name' => 'นายภาณุพงศ์', 'lastname' => 'สายศร', 'room' => '6/9'],
    ['name' => 'นายปัณณกร', 'lastname' => 'พวงสุวรรณ์', 'room' => '6/9'],
    ['name' => 'นายวิศรุต', 'lastname' => 'กลิ่นเรือง', 'room' => '6/9'],
    ['name' => 'นายอมรเทพ', 'lastname' => 'อันโน', 'room' => '6/9'],
    ['name' => 'นายจักรกริช', 'lastname' => 'เทศทอง', 'room' => '6/9'],
    ['name' => 'นายจิรฐา', 'lastname' => 'น้อยศรี', 'room' => '6/9'],
    ['name' => 'นายกรพิพัฒน์', 'lastname' => 'เล็กนาก', 'room' => '6/9'],
    ['name' => 'นายภัทรพล', 'lastname' => 'ชมพุฒ', 'room' => '6/9'],
    ['name' => 'นายศุภชัย', 'lastname' => 'รุ่งแสง', 'room' => '6/9'],
    ['name' => 'นายณัฐพล', 'lastname' => 'ปลื้มกิจมงคล', 'room' => '6/9'],
    ['name' => 'นายพลัษฎฐ์', 'lastname' => 'ด่านอนันตสุข', 'room' => '6/9'],
    ['name' => 'นายเรืองวิทย์', 'lastname' => 'โชคชัย', 'room' => '6/9'],
    ['name' => 'นายจิรายุธ', 'lastname' => 'บูรณะจันทร์', 'room' => '6/9'],
    ['name' => 'นางสาวณัชชา', 'lastname' => 'คําภา', 'room' => '6/9'],
    ['name' => 'นางสาวสาวิตรี', 'lastname' => 'มินสะมัน', 'room' => '6/9'],
    ['name' => 'นางสาวบัณพร', 'lastname' => 'ศิริพันธ์', 'room' => '6/9'],
    ['name' => 'นางสาวญาณิศา', 'lastname' => 'พ่วงพี', 'room' => '6/9'],
    ['name' => 'นางสาวกิตญาดา', 'lastname' => 'จิตรวิมลรัตน์', 'room' => '6/9'],
    ['name' => 'นางสาวสุดารัตน์', 'lastname' => 'สวนยิ้ม', 'room' => '6/9'],
    ['name' => 'นางสาวพลอยประภัส', 'lastname' => 'พิษรักษ์', 'room' => '6/9'],
    ['name' => 'นางสาวทัศชนก', 'lastname' => 'สมัย', 'room' => '6/9'],
    ['name' => 'นางสาวแพรพิไล', 'lastname' => 'บุญครอง', 'room' => '6/9'],
    ['name' => 'นางสาวกัลยภรณ์', 'lastname' => 'สิทธิวงศ์', 'room' => '6/9'],
    ['name' => 'นางสาวกาญจน์เกล้า', 'lastname' => 'สิทโธ', 'room' => '6/9'],
    ['name' => 'นางสาวกฤติมา', 'lastname' => 'เกียรติอาภรณ์', 'room' => '6/9'],
    ['name' => 'นางสาวอภิษฎา', 'lastname' => 'วชิรศรีสุนทรา', 'room' => '6/9'],
    ['name' => 'นางสาวศิริกานต์', 'lastname' => 'เบ้าตุ่น', 'room' => '6/9'],
    ['name' => 'นางสาวกัญญาวีย์', 'lastname' => 'อุดมสารี', 'room' => '6/9'],
    ['name' => 'นางสาวณัฐริณีย์', 'lastname' => 'ฉิมเรือง', 'room' => '6/9'],
    ['name' => 'นางสาวพิชาภรณ์', 'lastname' => 'มีโชคสม', 'room' => '6/9'],
    ['name' => 'นางสาวกัลย์ณิศา', 'lastname' => 'รัตน์เรืองอุดม', 'room' => '6/9'],
    ['name' => 'นางสาวชุดา', 'lastname' => 'สาริพันธ์', 'room' => '6/9'],
    ['name' => 'นางสาวกันตา', 'lastname' => 'ปุยะภัทรกุล', 'room' => '6/9'],
    ['name' => 'นางสาวนภัสพรพรหม', 'lastname' => 'ตันชรากรณ์', 'room' => '6/9'],
    ['name' => 'นางสาวกิ่งกาญจน์', 'lastname' => 'รวมพล', 'room' => '6/9'],
    ['name' => 'นางสาววชิราญาณ์', 'lastname' => 'วชิระนาวิน', 'room' => '6/9']
];

$targetStudent = $students[29];
unset($students[29]);
$students = array_values($students);
array_unshift($students, $targetStudent);
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>No.</th><th>ชื่อ</th><th>นามสกุล</th><th>ห้อง</th></tr>";
$no = 1;
foreach ($students as $student) {
    echo "<tr>";
    echo "<td>{$no}</td>";
    echo "<td>{$student['name']}</td>";
    echo "<td>{$student['lastname']}</td>";
    echo "<td>{$student['room']}</td>";
    echo "</tr>";
    $no++;
}


echo "</table>";
?>

</body>
</html>