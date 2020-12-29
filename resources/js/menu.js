let menu = {
    gioithieu: {
        innerhtml: "Giới thiệu",
        icon: "info-circle",
        submenu: {
            thanhtich: {
                innerhtml: "Thành tích đạt được",
                link: "#"
            },
            chucnang: {
                innerhtml: "Chức năng nhiệm vụ",
                link: "#"
            },
            lichsu: {
                innerhtml: "Lịch sử hình thành",
                link: "#"
            },
            ahllvt: {
                innerhtml: "Danh sách Anh hùng lực lượng vũ trang nhân dân",
                link: "#"
            }
        }
    },
    cocau: {
        innerhtml: "Cơ cấu tổ chức",
        icon: "sitemap",
        submenu: {
            bangiamdoc: {
                innerhtml: "Ban giám đốc",
                link: "#"
            },
            coquan: {
                innerhtml: "Khối cơ quan",
                submenu: {
                    khtt: {
                        innerhtml: "Kế hoạch tổng hợp",
                        link: "#"
                    },
                    chinhtri: {
                        innerhtml: "Chính trị",
                        link: "#"
                    },
                    haucan: {
                        innerhtml: "Hậu cần",
                        link: "#"
                    },
                    dieuduong: {
                        innerhtml: "Điều dưỡng",
                        link: "#"
                    },
                    hanhchinh: {
                        innerhtml: "Hành chính",
                        link: "#",
                    },
                    taichinh: {
                        innerhtml: "Tài chinh",
                        link: "#"
                    },
                    khoahuanluyen: {
                        innerhtml: "Khoa huấn luyện",
                        link: "#"
                    }
                },
            },
            khoinoi: {
                innerhtml: "Khối nội",
                submenu: {
                    a1: {
                        innerhtml: "Nội tim mạch (A1)",
                        link: "#"
                    },
                    a2: {
                        innerhtml: "Nội tiêu hóa (A2)",
                        link: "#"
                    },
                    a3: {
                        innerhtml: "Thận nhân tạo (A3)",
                        link: "#"
                    },
                    a4: {
                        innerhtml: "Truyền nhiễm - Da liễu (A4)",
                        link: "#"
                    },
                    a5: {
                        innerhtml: "Nội Cán bộ (A5)",
                        link: "#"
                    },
                    a6: {
                        innerhtml: "Nội thần kinh - Đột quỵ (A6)",
                        link: "#"
                    },
                    a7: {
                        innerhtml: "Y học cổ truyền (A7)",
                        link: "#"
                    },
                }
            },
            khoingoai: {
                innerhtml: "Khối ngoại",
                submenu: {
                    b1: {
                        innerhtml: "Chấn thương chỉnh hình (B1)",
                        link: "#"
                    },
                    b2: {
                        innerhtml: "Ngoại tổng quát - Lồng ngực (B2)",
                        link: "#"
                    },
                    b3: {
                        innerhtml: "Ngoại tiết niệu (B3)",
                        link: "#"
                    },
                    b4: {
                        innerhtml: "Hồi sức tích cực - Gây mê phẫu thuật (A8-B4)",
                        link: "#"
                    },
                    b5: {
                        innerhtml: "Phụ sản (B5)",
                        link: "#"
                    },
                    b6: {
                        innerhtml: "Ngoại thần kinh (B6)",
                        link: "#"
                    },
                    b7: {
                        innerhtml: "Khoa mắt (B7)",
                        link: "#"
                    },
                    b8: {
                        innerhtml: "Răng - Hàm - Mặt (B8)",
                        link: "#"
                    },
                    b9: {
                        innerhtml: "Tai - Mũi - Họng (B9)",
                        link: "#"
                    },
                }
            }
        }
    }
}

function makeid(length) {
    let result = '';
    let characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let charactersLength = characters.length;
    for (let i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}

function create_submenu(ParentItem) {
    if (ParentItem['submenu']) {
        for (SubMenuItem in ParentItem['submenu']) {
            ParentItem['submenu'][SubMenuItem]['target'] = SubMenuItem
            ParentItem['submenu'][SubMenuItem]['id'] = makeid(5)
            create_submenu(ParentItem['submenu'][SubMenuItem])
        }
    }
    return ParentItem
}

let result = new Object()
let menu_MainItem
let menu_SubMenuItem
for (ParentItem in menu) {
    menu[ParentItem]['target'] = ParentItem
    menu[ParentItem]['id'] = makeid(5)
    submenu_created = create_submenu(menu[ParentItem])
    menu[ParentItem] = submenu_created
}
console.log(JSON.stringify(menu))