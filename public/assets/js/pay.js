// Cai dat select tinh thanh
// Biến khởi tạo DOM và cấu hình request
var citis = document.getElementById("city");
var districts = document.getElementById("district");
var wards = document.getElementById("ward");
// request HTTP bằng axios để lấy dữ liệu từ file JSON chứa các thông tin về tỉnh, huyện, và xã của Việt Nam.
var Parameter = {
    url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
    method: "GET",
    responseType: "application/json",
};
//Promise để xử lý request
//gửi request GET đến URL chứa file JSON.
var promise = axios(Parameter);
// Sau khi request thành công và nhận được dữ liệu, hàm renderCity được gọi với dữ liệu từ file JSON.
promise.then(function (result) {
    renderCity(result.data);
});

function renderCity(data) {
    // Bước 1: Tạo danh sách Tỉnh/Thành phố
    for (const x of data) {
        //Tao 1 option trong dropdown menu
        //new Option(param1, param2):
        //param1: gia tri hien thi
        //param2: value se gui ve
        citis.options[citis.options.length] = new Option(x.Name, x.Id);
    }
    // Khi chọn Tỉnh/Thành phố (sự kiện onchange)
    // Khi người dùng chọn một tỉnh/thành phố
    citis.onchange = function () {
        //reset lai danh sach huyen, xa => de xoa data truoc do
        district.length = 1;
        ward.length = 1;
        if (this.value != "") {
            //Lọc dữ liệu và tìm tỉnh/thành phố có ID trùng với giá trị được chọn.
            const result = data.filter(n => n.Id === this.value);

            //Them cac quan/huyen cua tinh duoc chon vao dropdown cua district
            for (const k of result[0].Districts) {
                district.options[district.options.length] = new Option(k.Name, k.Id);
            }
        }
    };

    // Khi người dùng chọn một quan/huyen
    district.onchange = function () {
        //reset lai danh sach xa/phuong
        ward.length = 1;
        //Loc data va tim quan/huyen nao thuoc tinh vua chon
        const dataCity = data.filter((n) => n.Id === citis.value);
        if (this.value != "") {
            //Loc tim quan va lay cac xa/phuong thuoc huyen do
            const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

            //them cac xa/phuong vo dropdown cua ward
            for (const w of dataWards) {
                wards.options[wards.options.length] = new Option(w.Name, w.Id);
            }
        }
    };
}

// GetLocationName
function getLocationName(data, idProvince, idDistrict, idWard){
    let provinceName = ""
    let districtName = ""
    let wardName = ""
    const province = data.find(p => p.Id == idProvince)
    if(province){
        provinceName = province.Name
        const district = province.Districts.find(d => d.Id == idDistrict)
        if(district){
            districtName = district.Name
            const ward = district.Wards.find(w => w.Id == idWard)
            if(ward){
            wardName = ward.Name
            }
        }
    }
    return {provinceName, districtName, wardName}
}

promise.then(function (result) {
    const {provinceName, districtName, wardName} = getLocationName(result.data, 2, 24, 688);
    console.log(provinceName, districtName, wardName)
});