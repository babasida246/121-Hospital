<template>
  <ul class="navbar-nav ms-1 flex-column">
    <li class="nav-item">
      <anchor-collapse
        class="nav-item"
        CollapseTaget="collapse-gioithieu"
        InnerData="Giới thiệu"
        IconName="info-circle"
      ></anchor-collapse>
      <div class="collapse ms-3" id="collapse-gioithieu">
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="homepage"
          >Thành tích đạt được</application-nav-bar-link
        >
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="homepage"
          >Chức năng nhiệm vụ</application-nav-bar-link
        >
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="homepage"
          >Lịch sử hình thành</application-nav-bar-link
        >
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="homepage"
          >Danh sách Anh hùng Lực lượng vũ trang nhân
          dân</application-nav-bar-link
        >
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="homepage"
          >Thư viện hình ảnh</application-nav-bar-link
        >
      </div>
    </li>
    <li class="nav-item">
      <anchor-collapse
        class="nav-item"
        CollapseTaget="collapse-cocau"
        InnerData="Cơ cấu tổ chức"
        IconName="sitemap"
      ></anchor-collapse>
      <div class="collapse ms-3" id="collapse-cocau">
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="homepage"
          >Ban giám đốc</application-nav-bar-link
        >

        <anchor-collapse
          class="nav-item"
          CollapseTaget="collapse-coquan"
          InnerData="Khối cơ quan"          
        ></anchor-collapse>
        <div class="collapse ms-3" id="collapse-coquan">
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Kế hoạch tổng hợp</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Chính trị</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Hậu cần</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Điều dưỡng</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Hành chính</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Tài Chính</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Khoa Huấn luyện</application-nav-bar-link
          >
        </div>

        <anchor-collapse
          class="nav-item"
          CollapseTaget="collapse-khoinoi"
          InnerData="Khối nội"
        ></anchor-collapse>
        <div class="collapse ms-3" id="collapse-khoinoi">
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Nội tim mạch (A1)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Nội tiêu hóa (A2)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Thận nhân tạo (A3)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Truyền nhiễm - Da liễu (A4)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Nội Cán bộ (A5)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Nội thần kinh - Đột quỵ (A6)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Y học cổ truyền (A7)</application-nav-bar-link
          >
        </div>

        <anchor-collapse
          class="nav-item"
          CollapseTaget="collapse-khoingoai"
          InnerData="Khối ngoại"
        ></anchor-collapse>
        <div class="collapse ms-3" id="collapse-khoingoai">
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Chấn thương chỉnh hình (B1)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Ngoại tổng quát - Lồng ngực (B2)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Ngoại tiết niệu (B3)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Hồi sức tích cực - Gây mê phẫu thuật
            (A8-B4)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Phụ sản (B5)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Ngoại thần kinh (B6)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Khoa mắt (B7)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Răng - Hàm - Mặt (B8)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Tai - Mũi - Họng (B9)</application-nav-bar-link
          >
        </div>

        <anchor-collapse
          class="nav-item"
          CollapseTaget="collapse-canlamsang"
          InnerData="Cận lâm sàng"
        ></anchor-collapse>
        <div class="collapse ms-3" id="collapse-canlamsang">
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Khoa Khám bệnh (C1)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Cấp cứu ban đầu (C2)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Xét nghiệm (C3)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Giải phẩu bệnh (C4)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Chuẩn đoán chức năng (C5)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Chuẩn đoán hình ảnh (C6)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Khoa dược (C7)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Nhà thuốc (C8)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Trang bị (C9)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Dinh dưỡng (C10)</application-nav-bar-link
          >
          <application-nav-bar-link
            class="nav-link align-bottom"
            link="homepage"
            >Kiểm soát nhiễm khuẩn (C11)</application-nav-bar-link
          >
        </div>
      </div>
    </li>
    <li class="nav-item">
      <anchor-collapse
        class="nav-item"
        CollapseTaget="collapse-linhvuc"
        InnerData="Lĩnh vực hoạt động"
        IconName="stethoscope"
      ></anchor-collapse>
      <div class="collapse ms-3" id="collapse-linhvuc">
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="homepage"
          >Khám chữa bệnh bảo hiểm y tế</application-nav-bar-link
        >
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="homepage"
          >Khám chữa bệnh theo yêu cầu</application-nav-bar-link
        >
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="homepage"
          >Khám sức khỏe</application-nav-bar-link
        >
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="homepage"
          >Kỹ thuật xét nghiệm</application-nav-bar-link
        >
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="homepage"
          >Kỹ thuật chuẩn đoán hình ảnh</application-nav-bar-link
        >
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="homepage"
          >Phẫu thuật kỹ thuật cao</application-nav-bar-link
        >
      </div>
    </li>
    <li class="nav-item">
      <anchor-collapse
        class="nav-item"
        CollapseTaget="collapse-tintuc"
        InnerData="Tin tức"
        IconName="newspaper"
      ></anchor-collapse>
      <div class="collapse ms-3" id="collapse-tintuc">
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="homepage"
          >Tin hoạt động</application-nav-bar-link
        >
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="homepage"
          >Thông tin y khoa</application-nav-bar-link
        >
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="homepage"
          >Nghiên cứu khoa học</application-nav-bar-link
        >
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="homepage"
          >Công tác Đảng - Công tác Chính trị</application-nav-bar-link
        >
      </div>
    </li>
    <li class="nav-item">
      <anchor-collapse
        class="nav-item"
        CollapseTaget="collapse-doingubacsi"
        InnerData="Đội ngũ bác sĩ"
        IconName="user-md"
      ></anchor-collapse>
      <div class="collapse ms-3" id="collapse-doingubacsi">
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="homepage"
          ></application-nav-bar-link
        >
        <application-nav-bar-link
          class="nav-link align-bottom"
        ></application-nav-bar-link>
        <application-nav-bar-link
          class="nav-link align-bottom"
        ></application-nav-bar-link>
        <application-nav-bar-link
          class="nav-link align-bottom"
        ></application-nav-bar-link>
        <application-nav-bar-link
          class="nav-link align-bottom"
        ></application-nav-bar-link>
        <application-nav-bar-link
          class="nav-link align-bottom"
        ></application-nav-bar-link>
      </div>
    </li>
    <li class="nav-item">
      <anchor-collapse
        class="nav-item"
        CollapseTaget="collapse-lichcongtac"
        InnerData="Lịch công tác"
        IconName="calendar-alt"
      ></anchor-collapse>
      <div class="collapse ms-3" id="collapse-lichcongtac">
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="homepage"
        ></application-nav-bar-link>
        <application-nav-bar-link
          class="nav-link align-bottom"
        ></application-nav-bar-link>
        <application-nav-bar-link
          class="nav-link align-bottom"
        ></application-nav-bar-link>
        <application-nav-bar-link
          class="nav-link align-bottom"
        ></application-nav-bar-link>
        <application-nav-bar-link
          class="nav-link align-bottom"
        ></application-nav-bar-link>
        <application-nav-bar-link
          class="nav-link align-bottom"
        ></application-nav-bar-link>
      </div>
    </li>    
  </ul>
</template>

<script>
import AnchorCollapse from "../AnchorCollapse";
import ApplicationNavBarLink from "./ApplicationNavBarLink.vue";

export default {
  components: { AnchorCollapse,ApplicationNavBarLink },
};
</script>

<style>
</style>