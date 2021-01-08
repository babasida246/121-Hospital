<template>
  <div class="container">
    <div class="section-title">
      <h2>Các chuyên khoa</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi ad
        aperiam veniam odit. Ipsa voluptas totam quod aliquid consectetur quia
        voluptatibus necessitatibus eius sunt nesciunt iste aliquam, delectus
        deserunt eveniet.
        <!-- {{ this.Departments.mainDescription}} -->
      </p>
    </div>

    <div class="row">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <list
            v-for="department of Departments"
            :key="department"
            :departmentName="department.Name"
            :departmentID="department.id"
          ></list>
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1"
              >Nội tim mạch</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-2"
              >Nội tiêu hóa</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-3"
              >Thận nhân tạo</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-4"
              >Khoa cán bộ</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-5"
              >Khoa nội thần kinh đột quỵ</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-6"
              >Y học cổ truyền</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-7"
              >Chấn thương chỉnh hình
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-8"
              >Ngoại tổng quát - Lồng ngực</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-9"
              >Hồi sức tích cực - Gây mê phẫu thuật</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-10">Phụ sản</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-11"
              >Ngoại thần kinh</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Mắt</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">
          <info
            v-for="department of Departments"
            :key="department"
            :Department="department"
          ></info>
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Cardiology</h3>
                <p class="font-italic">
                  Qui laudantium consequatur laborum sit qui ad sapiente dila
                  parde sonata raqer a videna mareta paulona marka
                </p>
                <p>
                  Et nobis maiores eius. Voluptatibus ut enim blanditiis atque
                  harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut
                  molestiae aut qui. Est repellat minima eveniet eius et quis
                  magni nihil. Consequatur dolorem quaerat quos qui similique
                  accusamus nostrum rem vero
                </p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="/images/departments-1.jpg" alt="" class="img-fluid" />
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Et blanditiis nemo veritatis excepturi</h3>
                <p class="font-italic">
                  Qui laudantium consequatur laborum sit qui ad sapiente dila
                  parde sonata raqer a videna mareta paulona marka
                </p>
                <p>
                  Ea ipsum voluptatem consequatur quis est. Illum error ullam
                  omnis quia et reiciendis sunt sunt est. Non aliquid
                  repellendus itaque accusamus eius et velit ipsa voluptates.
                  Optio nesciunt eaque beatae accusamus lerode pakto madirna
                  desera vafle de nideran pal
                </p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="/images/departments-2.jpg" alt="" class="img-fluid" />
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                <p class="font-italic">
                  Eos voluptatibus quo. Odio similique illum id quidem non enim
                  fuga. Qui natus non sunt dicta dolor et. In asperiores velit
                  quaerat perferendis aut
                </p>
                <p>
                  Iure officiis odit rerum. Harum sequi eum illum corrupti culpa
                  veritatis quisquam. Neque necessitatibus illo rerum eum ut.
                  Commodi ipsam minima molestiae sed laboriosam a iste odio.
                  Earum odit nesciunt fugiat sit ullam. Soluta et harum
                  voluptatem optio quae
                </p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="/images/departments-3.jpg" alt="" class="img-fluid" />
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>
                  Fuga dolores inventore laboriosam ut est accusamus laboriosam
                  dolore
                </h3>
                <p class="font-italic">
                  Totam aperiam accusamus. Repellat consequuntur iure voluptas
                  iure porro quis delectus
                </p>
                <p>
                  Eaque consequuntur consequuntur libero expedita in voluptas.
                  Nostrum ipsam necessitatibus aliquam fugiat debitis quis
                  velit. Eum ex maxime error in consequatur corporis atque.
                  Eligendi asperiores sed qui veritatis aperiam quia a laborum
                  inventore
                </p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="/images/departments-4.jpg" alt="" class="img-fluid" />
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-5">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                <p class="font-italic">
                  Omnis blanditiis saepe eos autem qui sunt debitis porro quia.
                </p>
                <p>
                  Exercitationem nostrum omnis. Ut reiciendis repudiandae minus.
                  Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit
                  vero atque qui quibusdam amet. Occaecati sed est sint aut
                  vitae molestiae voluptate vel
                </p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="/images/departments-5.jpg" alt="" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Info from "./Info.vue";
import List from "./List.vue";
export default {
  props: ["Departments"],
  components: { List, Info },
  data() {
    return {};
  },
};
</script>

<style>
</style>