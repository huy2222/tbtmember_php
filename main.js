const selection=document.querySelector('.selection-overlay')
        const selectionMobile=document.querySelector('.selection-mobile')
        const openMenu=document.querySelector('.js-menu')
        const closeMenu=document.querySelector('.js-menu-close')
    
    
        function showselection (){
            selection.classList.add('open')
        }
        openMenu.addEventListener('click',showselection)
        function closeselection() {
            selection.classList.remove('open')
            // var selectionMobile=selectionmobile.c
            
        }
        closeMenu.addEventListener('click',closeselection)
        selection.addEventListener('click',closeselection)  
    
        // lấy thẻ input
        var input = document.getElementById("myInput");

        // định nghĩa hàm xử lý myFunction
        function myFunction() {
        var filter, ul, li, a, i;
        // lấy giá trị người dùng nhập
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName("li");
        // Nếu filter không có giá trị thị ẩn phần kết quare\
        if (!filter) {
          ul.style.display = "none";
          
        } else {
          // lặp qua tất cả các thẻ li chứa kết quả
          for (i = 0; i < li.length; i++) {
              // lấy thẻ a trong các thẻ li
              a = li[i].getElementsByTagName("a")[0];
              
              // kiểm tra giá trị nhập có tôn tại trong nội dung thẻ a
              if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                //nếu có hiển thị phàn tử ul và các thẻ li đó
                  ul.style.display = "block";
              } else {
                // nếu không ẩn các thẻ li
                li[i].style.display = "none";
                // noSearch.style.display = "block"
              }
          }
        }
    }
    //gán sự kiện cho thẻ input
    input.addEventListener("keyup", myFunction);
// // nhấn vào ẩn list tiềm kiếm
// var SearchList = document.querySelector('.search-list');
// function UnshowlistSr() {
//   SearchList.style.display = 'none';
// }    
// SearchList.addEventListener('click',UnshowlistSr)
// dữ liệu lưu trữ
// var DatamemberArray = [
//   {
//     name: 'Trần Thái Vinh',
//     star:3,
//     avatar: "mr.png",
//     timeteach:"12 năm",
//     specialize: "Vật Lí",
//     facebook: "https://www.facebook.com/huy.nguyennhat.7359/",
//     email: "nguyennhathuy21112005@gmail.com",
//     zalo: "0375506199",
//     phonenumber:"0375506199",
//   },
//   {
//     name: 'Nguyễn Xuân Hùng',
//     star:2,
//     avatar: "mr.png",
//     timeteach:"6 năm",
//     specialize: "Ngữ Văn",
//     facebook: "https://www.facebook.com/huy.nguyennhat.7359/",
//     email: "nguyennhathuy21112005@gmail.com",
//     zalo: "0355782783",
//     phonenumber:"0355782783",
//   },
//   {
//     name: 'Hồ Đức Triều',
//     star:0,
//     avatar: "mr.png",
//     timeteach:"6 năm",
//     specialize: "Toán",
//     facebook: "https://www.facebook.com/huy.nguyennhat.7359/",
//     email: "ductrieu@gmail.com",
//     zalo: "0903138189",
//     phonenumber:"0903138189",
//   },
//   {
//     name: 'Nguyễn Nhật Huy',
//     star: '3',
//     avatar: 'nguyennhathuy.png',
//     timeteach: '12 năm',
//     specialize: 'Tiếng Anh',
//     facebook: 'abc',
//     email: 'huy@',
//     zalo: '0818953936',
//     phonenumber: '0818953935',
//   }

  
// ]
// function DaTamemberFn(data , element) {
//   var memberstr = '';
//   var BackgroundStar='';
//     for (var i = 0; i<data.length; i++) {
//       var ManyStar='';
//     for (var s = 0; s< data[i].star; s++) {
//       ManyStar += '<i class="star ti-star"></i>';
//     }
//     if (data[i].star==3 & data[i].name =='Trần Thái Vinh') {
//       BackgroundStar='style="background-color:yellow;"';
//     } else {
//       BackgroundStar='style="background-color:red;"'
//     }

    
//       memberstr += `
//       <div class="modal-container">
//             <div class="modal-heading">   
//                 <div class="number"></div>                                 
//                 <h1 id="${data[i].name.toLowerCase().replace(/\s+/g, '')}">${data[i].name}</h1> 
//                 <div class="star-position" ${BackgroundStar}>
//                   ${ManyStar}
//                 </div>
                   
//             </div>
//             <div class="modal-content">
//                 <img  onerror="this.src='./asset/img/avatar/mr_mrs.png'" src="./asset/img/avatar/${data[i].avatar}" alt="">                
//             </div>
//             <div class="modal-footer">                       
//                 <p class="footer-content">Thời gian giảng dạy: ${data[i].timeteach}</p>
//                 <p class="footer-content">Chuyên môn: ${data[i].specialize}</p>
//                 <div class="social-network">
//                     <a href="${data[i].facebook}" title="Facebook" target="_blank" >
//                         <div class="network-icon-hover">
//                             <i class=" network-icon ti-facebook"></i>
//                         </div>
//                     </a>
//                     <a class="network-icon-hover" href="mailto:${data[i].email}" title="Email" onclick="alert('Gmail:${data[i].email}')">
//                         <div class="network-icon-hover">
//                             <i class=" network-icon ti-email"></i>
//                         </div>
//                     </a>    
//                     <a href="tel://${data[i].phonenumber}" title="Phone number">
//                         <div class="network-icon-hover">      
//                             <i class=" network-icon ti-mobile  -"></i>
//                         </div>
//                     </a>
//                     <a href="https://zalo.me/${data[i].zalo}" title="Zalo" target="_blank">
//                         <div class="network-icon-hover">
//                             <i class="network-icon  ti-id-badge"></i>
//                         </div>
//                     </a>     
//                 </div>         
//             </div>
//         </div>
//     `
//   }
//     element.innerHTML = memberstr;

// }  
// var ModalJs = document.getElementById('modal-js');
//  DaTamemberFn(DatamemberArray,ModalJs )  


// function SearchListFn(data , element) {
//   var searchstr = '';
//     for (var i = 0; i<data.length; i++) {
//       searchstr += `
//         <li><a href="#${data[i].name.toLowerCase().replace(/\s+/g, '')}">${data[i].name}</a></li>
//       `
//     }
//     element.innerHTML = searchstr;
// }  
// var SearchListJs = document.getElementById('myUL')
// SearchListFn(DatamemberArray,SearchListJs )  
