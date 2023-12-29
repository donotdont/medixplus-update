<style>
  .sum-pdf {
    padding: 10px;
    margin-top: 0 !important;
  }

  .container {
    font-family: "sarabun";
    /*font-size: 12pt;*/
  }
  table{
    font-family: "sarabun";
    font-size: 18px;
  }

  table th {
    font-family: "sarabun";
  }

  /* Start Boostrap */
  *,
  *::before,
  *::after {
    box-sizing: border-box;
  }

  html {
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  }

  article,
  aside,
  figcaption,
  figure,
  footer,
  header,
  hgroup,
  main,
  nav,
  section {
    display: block;
  }

  body {
    margin: 0;
    font-family: "sarabun";
    font-size: 18px;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
  }

  .container,
  .container-fluid,
  .container-sm,
  .container-md,
  .container-lg,
  .container-xl {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  }

  .col {
    float: left;
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
    width: 100%;
  }

  .col-auto {
    float: left;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
    width: 100%;
  }

  .col-1 {
    float: left;
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
    width: 8.333333%;
  }

  .col-2 {
    float: left;
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
    width: 16.666667%;
  }

  .col-3 {
    float: left;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
    width: 25%;
  }

  .col-4 {
    float: left;
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
    width: 33.333333%;
  }

  .col-5 {
    float: left;
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
    width: 41.666667%;
  }

  .col-6 {
    float: left;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
    width: 50%;
  }

  .col-7 {
    float: left;
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
    width: 58.333333%;
  }

  .col-8 {
    float: left;
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
    width: 66.666667%;
  }

  .col-9 {
    float: left;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
    width: 75%;
  }

  .col-10 {
    float: left;
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
    width: 83.333333%;
  }

  .col-11 {
    float: left;
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
    width: 91.666667%;
  }

  .col-12 {
    float: left;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
    width: 100%;
  }


  .table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
  }

  .table th,
  .table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
  }

  .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
  }

  .table tbody+tbody {
    border-top: 2px solid #dee2e6;
  }

  .table-sm th,
  .table-sm td {
    padding: 0.3rem;
  }

  .table-bordered {
    border: 1px solid #dee2e6;
  }

  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6;
  }

  .table-bordered thead th,
  .table-bordered thead td {
    border-bottom-width: 2px;
  }

  .table-borderless th,
  .table-borderless td,
  .table-borderless thead th,
  .table-borderless tbody+tbody {
    border: 0;
  }

  .table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, 0.05);
  }

  .table-hover tbody tr:hover {
    color: #212529;
    background-color: rgba(0, 0, 0, 0.075);
  }

  .table-primary,
  .table-primary>th,
  .table-primary>td {
    background-color: #b8daff;
  }

  .table-primary th,
  .table-primary td,
  .table-primary thead th,
  .table-primary tbody+tbody {
    border-color: #7abaff;
  }

  .table-hover .table-primary:hover {
    background-color: #9fcdff;
  }

  .table-hover .table-primary:hover>td,
  .table-hover .table-primary:hover>th {
    background-color: #9fcdff;
  }

  .table-secondary,
  .table-secondary>th,
  .table-secondary>td {
    background-color: #d6d8db;
  }

  .table-secondary th,
  .table-secondary td,
  .table-secondary thead th,
  .table-secondary tbody+tbody {
    border-color: #b3b7bb;
  }

  .table-hover .table-secondary:hover {
    background-color: #c8cbcf;
  }

  .table-hover .table-secondary:hover>td,
  .table-hover .table-secondary:hover>th {
    background-color: #c8cbcf;
  }

  .table-success,
  .table-success>th,
  .table-success>td {
    background-color: #c3e6cb;
  }

  .table-success th,
  .table-success td,
  .table-success thead th,
  .table-success tbody+tbody {
    border-color: #8fd19e;
  }

  .table-hover .table-success:hover {
    background-color: #b1dfbb;
  }

  .table-hover .table-success:hover>td,
  .table-hover .table-success:hover>th {
    background-color: #b1dfbb;
  }

  .table-info,
  .table-info>th,
  .table-info>td {
    background-color: #bee5eb;
  }

  .table-info th,
  .table-info td,
  .table-info thead th,
  .table-info tbody+tbody {
    border-color: #86cfda;
  }

  .table-hover .table-info:hover {
    background-color: #abdde5;
  }

  .table-hover .table-info:hover>td,
  .table-hover .table-info:hover>th {
    background-color: #abdde5;
  }

  .table-warning,
  .table-warning>th,
  .table-warning>td {
    background-color: #ffeeba;
  }

  .table-warning th,
  .table-warning td,
  .table-warning thead th,
  .table-warning tbody+tbody {
    border-color: #ffdf7e;
  }

  .table-hover .table-warning:hover {
    background-color: #ffe8a1;
  }

  .table-hover .table-warning:hover>td,
  .table-hover .table-warning:hover>th {
    background-color: #ffe8a1;
  }

  .table-danger,
  .table-danger>th,
  .table-danger>td {
    background-color: #f5c6cb;
  }

  .table-danger th,
  .table-danger td,
  .table-danger thead th,
  .table-danger tbody+tbody {
    border-color: #ed969e;
  }

  .table-hover .table-danger:hover {
    background-color: #f1b0b7;
  }

  .table-hover .table-danger:hover>td,
  .table-hover .table-danger:hover>th {
    background-color: #f1b0b7;
  }

  .table-light,
  .table-light>th,
  .table-light>td {
    background-color: #fdfdfe;
  }

  .table-light th,
  .table-light td,
  .table-light thead th,
  .table-light tbody+tbody {
    border-color: #fbfcfc;
  }

  .table-hover .table-light:hover {
    background-color: #ececf6;
  }

  .table-hover .table-light:hover>td,
  .table-hover .table-light:hover>th {
    background-color: #ececf6;
  }

  .table-dark,
  .table-dark>th,
  .table-dark>td {
    background-color: #c6c8ca;
  }

  .table-dark th,
  .table-dark td,
  .table-dark thead th,
  .table-dark tbody+tbody {
    border-color: #95999c;
  }

  .table-hover .table-dark:hover {
    background-color: #b9bbbe;
  }

  .table-hover .table-dark:hover>td,
  .table-hover .table-dark:hover>th {
    background-color: #b9bbbe;
  }

  .table-active,
  .table-active>th,
  .table-active>td {
    background-color: rgba(0, 0, 0, 0.075);
  }

  .table-hover .table-active:hover {
    background-color: rgba(0, 0, 0, 0.075);
  }

  .table-hover .table-active:hover>td,
  .table-hover .table-active:hover>th {
    background-color: rgba(0, 0, 0, 0.075);
  }

  .table .thead-dark th {
    color: #fff;
    background-color: #343a40;
    border-color: #454d55;
  }

  .table .thead-light th {
    color: #495057;
    background-color: #e9ecef;
    border-color: #dee2e6;
  }

  .table-dark {
    color: #fff;
    background-color: #343a40;
  }

  .table-dark th,
  .table-dark td,
  .table-dark thead th {
    border-color: #454d55;
  }

  .table-dark.table-bordered {
    border: 0;
  }

  .table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05);
  }

  .table-dark.table-hover tbody tr:hover {
    color: #fff;
    background-color: rgba(255, 255, 255, 0.075);
  }

  @media (max-width: 575.98px) {
    .table-responsive-sm {
      display: block;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }

    .table-responsive-sm>.table-bordered {
      border: 0;
    }
  }

  @media (max-width: 767.98px) {
    .table-responsive-md {
      display: block;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }

    .table-responsive-md>.table-bordered {
      border: 0;
    }
  }

  @media (max-width: 991.98px) {
    .table-responsive-lg {
      display: block;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }

    .table-responsive-lg>.table-bordered {
      border: 0;
    }
  }

  @media (max-width: 1199.98px) {
    .table-responsive-xl {
      display: block;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
    }

    .table-responsive-xl>.table-bordered {
      border: 0;
    }
  }

  .table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }

  .table {
    border-collapse: collapse !important;
  }

  .table td,
  .table th {
    background-color: #fff !important;
  }

  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6 !important;
  }

  .table-dark {
    color: inherit;
  }

  .table-dark th,
  .table-dark td,
  .table-dark thead th,
  .table-dark tbody+tbody {
    border-color: #dee2e6;
  }

  .table .thead-dark th {
    color: inherit;
    border-color: #dee2e6;
  }

  .table-responsive>.table-bordered {
    border: 0;
  }

  .text-left {
    text-align: left !important;
  }

  .text-center {
    text-align: center !important;  
  }

  .text-right {
    text-align: right !important;
  }

  /* End Boostrap */
</style>
<div class="container" style="border: solid 1px #eee;">


  <!-- <div class="bIgbox"  style="margin-top: 300px;margin-top: 200px; border: solid 1px #ddd; padding: 100px;"> -->

  <div class="row">
    <!-- logo and Address -->
    <div class="row col-9">
      <div class="col-12 Logo-pdf">
        <img src="/assets/images/APlogo.png" style="padding: 20px; width: 30%;">
      </div>

      <div class="col-12 Add-pdf">
        <p>บริษัท เอพี ไดแอกซ์นอสติก จำกัด(สำนักงานใหญ่)<br>
          199/44 หมู่ที่1 ต.สันทรายหลวง อ.สันทราย จ.เชียงใหม่<br>
          เลขประจำตัวผู้เสียภาษี 0505565003437<br>
          โทร. 095682562
        </p>
      </div>
    </div>
    <!-- logo and Address -->

    <!-- date and number -->
    <div class="col-3">
      <table class="table text-right" width="15%">
        <tr>
          <td colspan="2" class="text-right">
            <h1>ใบเสนอราคา</h1>
          </td>
        </tr>
        <tr>
          <td>เลขที่</td>
          <td>ปปxxxxxx</td>
        </tr>
        <tr>
          <td>วันที่</td>
          <td>xxxxxx</td>
        </tr>
        <tr>
          <td>ผู้ขาย</td>
          <td>ปปxxxxxx</td>
        </tr>
      </table>
      <hr class="border-top:1px solid #eee;color:#eee;" />
    </div>
    <!-- date and number -->
  </div>


  <div class="row Debox-pdf">
    <h6>บริษัท xxxxxx</h6>
    <div class="row">
      <table class="table">
        <thead>
          <tr style="border-top:1px solid #eee;border-bottom:1px solid #eee;">
            <th scope="col">#</th>
            <th scope="col">รายละเอียด</th>
            <th scope="col" class="text-center">จำนวน</th>
            <th scope="col" class="text-right">ราคาต่อหนวย</th>
            <th scope="col" class="text-right">ยอดรวม</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td class="text-center">500</td>
            <td class="text-right">900</td>
            <td class="text-right">909,909</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td class="text-center">500</td>
            <td class="text-right">900</td>
            <td class="text-right">909,909</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry the Bird</td>
            <td class="text-center">500</td>
            <td class="text-right">900</td>
            <td class="text-right">909,909</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>



  <div style='float:right;width: 50%'>
    <table class="table text-right">
      <tr>
        <td class="text-right">รวมเป็นเงิน</td>
        <td class="text-right">100000</td>
      </tr>
      <tr>
        <td class="text-right">ภาษีมูลค่าเพิ่ม</td>
        <td class="text-right">5 %</td>
      </tr>
      <tr>
        <td class="text-right">ราคาไม่รวมภาษีมูลค่าเพิ่ม</td>
        <td class="text-right">800000</td>
      </tr>
      <tr>
        <td class="text-right">จำนวนเงินรวมทั้งสิ้น</td>
        <td class="text-right">100000</td>
      </tr>
    </table>
  </div>
</div>

<!-- </div> -->