<script>
// กำหนดข้อมูลอำเภอในแต่ละจังหวัดในรูปแบบของ JavaScript Object
// คีย์ของแต่ละรายการคือจังหวัด ส่วนค่าของแต่ละรายการเป็น array ของชื่ออำเภอในจังหวัดนั้น ๆ
const districtsData = {
    bangkok: ["เขตศาลายา", "เขตพหลโยธิน", "เขตราชวิถี"],
    krabi: ["อำเภอเมืองราชบุรี", "อำเภอเหนือคลอง"],
    kanchanaburi: ["อำเภอเมืองกาญจนบุรี", "อำเภอบ่อพลอย"],
    chiangmai: ["อำเภอเมืองเชียงใหม่", "อำเภอแม่ริม"],
    phuket: ["อำเภอเมืองภูเก็ต", "อำเภอกะทู้"]
};

// กำหนดข้อมูลตำบลในแต่ละอำเภอในรูปแบบของ JavaScript Object
// คีย์ของแต่ละรายการคืออำเภอ ส่วนค่าของแต่ละรายการเป็น array ของชื่อตำบลในอำเภอนั้น ๆ
const subdistrictsData = {
    "เขตพระนคร": ["แขวงบางรัก", "แขวงพระบรมมหาราชวัง"],
    "เขตดุสิต": ["แขวงดุสิต", "แขวงวชิรพยาบาล"],
    "อำเภอเมืองกระบี่": ["ตำบลกระบี่ใหญ่", "ตำบลกระบี่น้อย"],
    "อำเภอเมืองเชียงใหม่": ["ตำบลสุเทพ", "ตำบลหายยา"],
    "อำเภอเมืองภูเก็ต": ["ตำบลตลาดใหญ่", "ตำบลตลาดเหนือ"]
    // เพิ่มข้อมูลตำบลอื่นๆ ตามที่ต้องการ
};

// ฟังก์ชัน updateDistricts() ใช้สำหรับอัปเดตรายการตัวเลือกใน dropdown ของอำเภอ
// โดยจะทำงานทุกครั้งที่ผู้ใช้เลือกจังหวัดใน dropdown ของจังหวัด
function updateDistricts() {
    // ดึงค่าเลือกของจังหวัดที่ผู้ใช้เลือกใน dropdown
    const province = document.getElementById("province").value;
    // ดึงองค์ประกอบ dropdown ของอำเภอมาเก็บไว้ในตัวแปร
    const districtSelect = document.getElementById("district");
    
    // ล้างตัวเลือกใน dropdown ของอำเภอ เพื่อให้ไม่มีค่าเหลือจากการเลือกครั้งก่อนหน้า
    districtSelect.innerHTML = '<option selected disabled value="">เลือกอำเภอ/เขต</option>';

    // ตรวจสอบว่าจังหวัดที่เลือกมีข้อมูลอำเภอใน districtsData หรือไม่
    if (province && districtsData[province]) {
        // หากมีข้อมูล ให้วนลูปผ่าน array ของอำเภอในจังหวัดนั้น
        districtsData[province].forEach(district => {
            // สร้างองค์ประกอบ <option> ใหม่สำหรับแต่ละอำเภอ
            const option = document.createElement("option");
            option.value = district; // ตั้งค่า value ของ <option> เป็นชื่ออำเภอ
            option.text = district;  // ตั้งค่าข้อความที่แสดงเป็นชื่ออำเภอ
            // เพิ่ม <option> นี้เข้าไปใน dropdown ของอำเภอ
            districtSelect.appendChild(option);
        });
    }
}

// ฟังก์ชัน updateSubdistricts() ใช้สำหรับอัปเดตรายการตัวเลือกใน dropdown ของตำบล
// โดยจะทำงานทุกครั้งที่ผู้ใช้เลือกอำเภอใน dropdown ของอำเภอ
function updateSubdistricts() {
    // ดึงค่าเลือกของอำเภอที่ผู้ใช้เลือกใน dropdown
    const district = document.getElementById("district").value;
    // ดึงองค์ประกอบ dropdown ของตำบลมาเก็บไว้ในตัวแปร
    const subdistrictSelect = document.getElementById("subdistrict");
    
    // ล้างตัวเลือกใน dropdown ของตำบล เพื่อให้ไม่มีค่าเหลือจากการเลือกครั้งก่อนหน้า
    subdistrictSelect.innerHTML = '<option selected disabled value="">เลือกตำบล</option>';

    // ตรวจสอบว่าอำเภอที่เลือกมีข้อมูลตำบลใน subdistrictsData หรือไม่
    if (district && subdistrictsData[district]) {
        // หากมีข้อมูล ให้วนลูปผ่าน array ของตำบลในอำเภอนั้น
        subdistrictsData[district].forEach(subdistrict => {
            // สร้างองค์ประกอบ <option> ใหม่สำหรับแต่ละตำบล
            const option = document.createElement("option");
            option.value = subdistrict; // ตั้งค่า value ของ <option> เป็นชื่อตำบล
            option.text = subdistrict;  // ตั้งค่าข้อความที่แสดงเป็นชื่อตำบล
            // เพิ่ม <option> นี้เข้าไปใน dropdown ของตำบล
            subdistrictSelect.appendChild(option);
        });
    }
}

    </script>