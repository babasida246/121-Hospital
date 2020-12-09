<template>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto flex-column">
      <li class="nav-item">
        <anchor-collapse CollapseTaget="collapse-gioithieu" InnerData="Giới thiệu"></anchor-collapse>
        <div class="collapse ml-6" id="collapse-gioithieu">
          <nav-link class="nav-link align-bottom" link="homepage">Thành tích đạt được</nav-link>
          <nav-link class="nav-link align-bottom" link="homepage">Chức năng nhiệm vụ</nav-link>
          <nav-link class="nav-link align-bottom" link="homepage">Lịch sử hình thành</nav-link>
          <nav-link class="nav-link align-bottom" link="homepage">Danh sách Anh hùng Lực lượng vũ trang nhân dân</nav-link>
        </div>
      </li>
     <li class="nav-item">
        <anchor-collapse CollapseTaget="collapse-cocau" InnerData="Cơ cấu tổ chức"></anchor-collapse>
        <div class="collapse ml-6" id="collapse-cocau">
          <nav-link class="nav-link align-bottom" link="homepage">Ban giám đốc</nav-link>
          
          <anchor-collapse CollapseTaget="collapse-coquan" InnerData="Khối cơ quan"></anchor-collapse>
          <div class="collapse ml-6" id="collapse-coquan">
            <nav-link class="nav-link align-bottom" link="homepage">Kế hoạch tổng hợp</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Chính trị</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Hậu cần</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Điều dưỡng</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Hành chính</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Tài Chính</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Khoa Huấn luyện</nav-link>
          </div>

          <anchor-collapse CollapseTaget="collapse-khoinoi" InnerData="Khối nội"></anchor-collapse>
          <div class="collapse ml-6" id="collapse-khoinoi">
            <nav-link class="nav-link align-bottom" link="homepage">Nội tim mạch (A1)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Nội tiêu hóa (A2)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Thận nhân tạo (A3)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Truyền nhiễm - Da liễu (A4)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Nội Cán bộ (A5)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Nội thần kinh - Đột quỵ (A6)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Y học cổ truyền (A7)</nav-link>
          </div>

          <anchor-collapse CollapseTaget="collapse-khoingoai" InnerData="Khối ngoại"></anchor-collapse>
          <div class="collapse ml-6" id="collapse-khoingoai">
            <nav-link class="nav-link align-bottom" link="homepage">Chấn thương chỉnh hình (B1)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Ngoại tổng quát - Lồng ngực (B2)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Ngoại tiết niệu (B3)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Hồi sức tích cực - Gây mê phẫu thuật (A8-B4)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Phụ sản (B5)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Ngoại thần kinh (B6)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Khoa mắt (B7)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Răng - Hàm - Mặt (B8)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Tai - Mũi - Họng (B9)</nav-link>
          </div>

          <anchor-collapse CollapseTaget="collapse-canlamsang" InnerData="Cận lâm sàng"></anchor-collapse>
          <div class="collapse ml-6" id="collapse-canlamsang">
            <nav-link class="nav-link align-bottom" link="homepage">Khoa Khám bệnh (C1)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Cấp cứu ban đầu (C2)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Xét nghiệm (C3)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Giải phẩu bệnh (C4)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Chuẩn đoán chức năng (C5)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Chuẩn đoán hình ảnh (C6)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Khoa dược (C7)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Nhà thuốc (C8)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Trang bị (C9)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Dinh dưỡng (C10)</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Kiểm soát nhiễm khuẩn (C11)</nav-link>
            
          </div>
       </div>
     </li>
     <li class="nav-item">
       <anchor-collapse CollapseTaget="collapse-linhvuc" InnerData="Lĩnh vực hoạt động"></anchor-collapse>
       <div class="collapse ml-6" id="collapse-linhvuc">
            <nav-link class="nav-link align-bottom" link="homepage">Khám chữa bệnh bảo hiểm y tế</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Khám chữa bệnh theo yêu cầu</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Khám sức khỏe</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Kỹ thuật xét nghiệm</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Kỹ thuật chuẩn đoán hình ảnh</nav-link>
            <nav-link class="nav-link align-bottom" link="homepage">Phẫu thuật kỹ thuật cao</nav-link>
       </div>
     </li>
     <li class="nav-item">
       <anchor-collapse CollapseTaget="collapse-tintuc" InnerData="Tin tức"></anchor-collapse>
       <div class="collapse ml-6" id="collapse-tintuc">
         <nav-link class="nav-link align-bottom" link="homepage"></nav-link>
         <nav-link class="nav-link align-bottom" link="homepage"></nav-link>
         <nav-link class="nav-link align-bottom" link="homepage"></nav-link>
         <nav-link class="nav-link align-bottom" link="homepage"></nav-link>
         <nav-link class="nav-link align-bottom" link="homepage"></nav-link>
         <nav-link class="nav-link align-bottom" link="homepage"></nav-link>
       </div>
     </li>
     <li class="nav-item">
       <anchor-collapse CollapseTaget="collapse-gioithieu" InnerData="Đội ngũ bác sĩ"></anchor-collapse>
       <div class="collapse ml-6" id="collapse-">
         <nav-link class="nav-link align-bottom" link="homepage"></nav-link>
         <nav-link class="nav-link align-bottom"></nav-link>
         <nav-link class="nav-link align-bottom"></nav-link>
         <nav-link class="nav-link align-bottom"></nav-link>
         <nav-link class="nav-link align-bottom"></nav-link>
         <nav-link class="nav-link align-bottom"></nav-link>
       </div>
     </li>
    </ul>
  </div>
</template>

<script>
import AnchorCollapse from "../AnchorCollapse"
import NavLink from "./NavLink"
export default {
  props:{
    
  },
  components:{
    AnchorCollapse,
    NavLink
  }
};
</script>

<style>

</style>