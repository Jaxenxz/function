<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>รวมฟังก์ชัน PHP</title>
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            margin: 20px;
            padding: 20px;
        }
        .section {
            margin-bottom: 30px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        h2 {
            color: #444;
        }
        .output {
            background-color: #f5f5f5;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <h1>รวมฟังก์ชัน PHP จากบทเรียนที่ 6</h1>

    <div class="section">
        <h2>1. ฟังก์ชันพื้นฐาน</h2>
        <?php
        function say(){
            echo "<h3>PHP !!!</h3>";
            echo "<hr>";
        }
        
        echo "<p>เรียกใช้ฟังก์ชัน say() จำนวน 5 ครั้ง:</p>";
        echo "<div class='output'>";
        for ($i=1; $i<=5; $i++) {
            say();
        }
        echo "</div>";
        ?>
    </div>

    <div class="section">
        <h2>2. ฟังก์ชันที่รับพารามิเตอร์</h2>
        <?php
        function says($message) {
            echo "<h3>Hello \t $message !!!</h3>";
            echo "<hr>";
        }
        
        echo "<p>เรียกใช้ฟังก์ชัน says() กับข้อความต่างๆ:</p>";
        echo "<div class='output'>";
        says("PHP");
        says("Laravel");
        says("Codeiter");
        echo "</div>";
        ?>
    </div>

    <div class="section">
        <h2>3. ฟังก์ชันที่รับหลายพารามิเตอร์</h2>
        <?php
        function saySymbol($message, $symbol) {
            echo "<h3>Hello \t $message \t $symbol</h3>";
            echo "<hr>";
        }
        
        echo "<p>เรียกใช้ฟังก์ชัน saySymbol() กับข้อความและสัญลักษณ์ต่างๆ:</p>";
        echo "<div class='output'>";
        echo "saySymbol('PHP','*');<br>";
        saySymbol("PHP", "*");
        echo "saySymbol('Laravel','=====');<br>";
        saySymbol("Laravel", "=====");
        echo "saySymbol('CodeIgniter','+++++++');<br>";
        saySymbol("CodeIgniter", "+++++++++");
        echo "</div>";
        ?>
    </div>

    <div class="section">
        <h2>4. ฟังก์ชันคำนวณและ return ค่า</h2>
        <?php
        function getTotal($sal, $mon){
            $total = $sal * $mon;
            return $total;
        }
        
        $salary = 15000;
        $month = 5;
        
        echo "<p>การคำนวณเงินเดือนรวม:</p>";
        echo "<div class='output'>";
        echo "<h3>เงินเดือน : $salary บาท จำนวนเดือน : $month เดือน </h3>";
        $numTotal = number_format(getTotal($salary, $month));
        echo "<h3>รวมเงินที่ได้รับ : $numTotal บาท</h3>";
        echo "</div>";
        ?>
    </div>

    <div class="section">
        <h2>5. ฟังก์ชันแปลงวันที่เป็นภาษาไทย</h2>
        <?php
        function convertDateToThai($date) {
            $thaiMonths = [
                1 => "มกราคม", 2 => "กุมภาพันธ์", 3 => "มีนาคม", 4 => "เมษายน",
                5 => "พฤษภาคม", 6 => "มิถุนายน", 7 => "กรกฎาคม", 8 => "สิงหาคม",
                9 => "กันยายน", 10 => "ตุลาคม", 11 => "พฤศจิกายน", 12 => "ธันวาคม"
            ];
            $dateParts = explode('-', $date);
            $year = (int)$dateParts[0] + 543;
            $month = (int)$dateParts[1];
            $day = (int)$dateParts[2];
            return "{$day} {$thaiMonths[$month]} {$year}";
        }
        
        $date = "2025-01-06";
        
        echo "<p>แปลงวันที่เป็นรูปแบบไทย:</p>";
        echo "<div class='output'>";
        echo "วันที่ในรูปแบบ Y-m-d: $date<br>";
        echo "วันที่ภาษาไทย : " . convertDateToThai($date);
        echo "</div>";
        ?>
    </div>

    <div class="section">
        <h2>ทดสอบเพิ่มเติม</h2>
        <?php
        echo "<p>ทดสอบการแปลงวันที่ปัจจุบันเป็นภาษาไทย:</p>";
        echo "<div class='output'>";
        $today = date("Y-m-d");
        echo "วันที่ปัจจุบัน: $today<br>";
        echo "วันที่ภาษาไทย: " . convertDateToThai($today);
        echo "</div>";
        ?>
    </div>
</body>
</html>