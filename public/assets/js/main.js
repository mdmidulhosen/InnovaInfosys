
            window.ityped.init(document.querySelector('.ityped'),{
                strings: ['Projects'],
                loop: true
            });

            window.ityped.init(document.querySelector('.ityped2'),{
                strings: ['Task'],
                loop: true
            })

            window.ityped.init(document.querySelector('.ityped3'),{
                strings: ['teams'],
                loop: true
            })

            window.ityped.init(document.querySelector('.ityped4'),{
                strings: ['contacts'],
                loop: true
            })

            window.ityped.init(document.querySelector('.ityped5'),{
                strings: ['recruitments'],
                loop: true
            })

            window.ityped.init(document.querySelector('.ityped6'),{
                strings: ['revenues'],
                loop: true
            })

            window.ityped.init(document.querySelector('.ityped7'),{
                strings: ['expenses'],
                loop: true
            })

            window.ityped.init(document.querySelector('.ityped8'),{
                strings: ['invoices'],
                loop: true
            })

            window.ityped.init(document.querySelector('.ityped9'),{
                strings: ['Leads'],
                loop: true
            })

            window.ityped.init(document.querySelector('.ityped10'),{
                strings: ['deadlins'],
                loop: true
            })

            window.ityped.init(document.querySelector('.ityped11'),{
                strings: ['products'],
                loop: true
            })

            window.ityped.init(document.querySelector('.ityped12'),{
                strings: ['offers'],
                loop: true
            })












            var siItem1 = document.getElementById("si-content-item1");
            var siItem2 = document.getElementById("si-content-item2");
            var siItem3 = document.getElementById("si-content-item3");
            var siItem4 = document.getElementById("si-content-item4");
            var siItem5 = document.getElementById("si-content-item5");
            var siItem6 = document.getElementById("si-content-item6");

            var indusItem1 = document.getElementById("indus-item1");
            var indusItem2 = document.getElementById("indus-item2");
            var indusItem3 = document.getElementById("indus-item3");
            var indusItem4 = document.getElementById("indus-item4");
            var indusItem5 = document.getElementById("indus-item5");
            var indusItem6 = document.getElementById("indus-item6");

            function siContent1(){
                siItem1.style.display = "Block";
                siItem2.style.display = "none";
                siItem3.style.display = "none";
                siItem4.style.display = "none";
                siItem5.style.display = "none";
                siItem6.style.display = "none";

                indusItem1.classList.add("si-item1-changing");
                indusItem2.classList.remove("si-item1-changing");
                indusItem3.classList.remove("si-item1-changing");
                indusItem4.classList.remove("si-item1-changing");
                indusItem5.classList.remove("si-item1-changing");
                indusItem6.classList.remove("si-item1-changing");
            }

            function siContent2(){
                siItem1.style.display = "none";
                siItem2.style.display = "block";
                siItem3.style.display = "none";
                siItem4.style.display = "none";
                siItem5.style.display = "none";
                siItem6.style.display = "none";

                indusItem1.classList.remove("si-item1-changing");
                indusItem2.classList.add("si-item1-changing");
                indusItem3.classList.remove("si-item1-changing");
                indusItem4.classList.remove("si-item1-changing");
                indusItem5.classList.remove("si-item1-changing");
                indusItem6.classList.remove("si-item1-changing");
            }

            function siContent3(){
                siItem1.style.display = "none";
                siItem2.style.display = "none";
                siItem3.style.display = "block";
                siItem4.style.display = "none";
                siItem5.style.display = "none";
                siItem6.style.display = "none";

                indusItem1.classList.remove("si-item1-changing");
                indusItem2.classList.remove("si-item1-changing");
                indusItem3.classList.add("si-item1-changing");
                indusItem4.classList.remove("si-item1-changing");
                indusItem5.classList.remove("si-item1-changing");
                indusItem6.classList.remove("si-item1-changing");
            }

            function siContent4(){
                siItem1.style.display = "none";
                siItem2.style.display = "none";
                siItem3.style.display = "none";
                siItem4.style.display = "block";
                siItem5.style.display = "none";
                siItem6.style.display = "none";

                indusItem1.classList.remove("si-item1-changing");
                indusItem2.classList.remove("si-item1-changing");
                indusItem3.classList.remove("si-item1-changing");
                indusItem4.classList.add("si-item1-changing");
                indusItem5.classList.remove("si-item1-changing");
                indusItem6.classList.remove("si-item1-changing");
            }

            function siContent5(){
                siItem1.style.display = "none";
                siItem2.style.display = "none";
                siItem3.style.display = "none";
                siItem4.style.display = "none";
                siItem5.style.display = "block";
                siItem6.style.display = "none";

                indusItem1.classList.remove("si-item1-changing");
                indusItem2.classList.remove("si-item1-changing");
                indusItem3.classList.remove("si-item1-changing");
                indusItem4.classList.remove("si-item1-changing");
                indusItem5.classList.add("si-item1-changing");
                indusItem6.classList.remove("si-item1-changing");
            }

            function siContent6(){
                siItem1.style.display = "none";
                siItem2.style.display = "none";
                siItem3.style.display = "none";
                siItem4.style.display = "none";
                siItem5.style.display = "none";
                siItem6.style.display = "block";

                indusItem1.classList.remove("si-item1-changing");
                indusItem2.classList.remove("si-item1-changing");
                indusItem3.classList.remove("si-item1-changing");
                indusItem4.classList.remove("si-item1-changing");
                indusItem5.classList.remove("si-item1-changing");
                indusItem6.classList.add("si-item1-changing");
            }



            setTimeout(() => {
                siContent1()
            }, 1000);

            setTimeout(() => {
                siContent2()
            }, 4000);

            setTimeout(() => {
                siContent3()
            }, 7000);

            setTimeout(() => {
                siContent4()
            }, 10000);

            setTimeout(() => {
                siContent5()
            }, 13000);

            setTimeout(() => {
                siContent6()
            }, 16000);



         var item1 = document.getElementById("click-option1");
         var item2 = document.getElementById("click-option2");
         var item3 = document.getElementById("click-option3");
         var item4 = document.getElementById("click-option4");
         var item5 = document.getElementById("click-option5");
         var item6 = document.getElementById("click-option6");
         var item7 = document.getElementById("click-option7");
         var item8 = document.getElementById("click-option8");
         var item9 = document.getElementById("click-option9");
         var item10 = document.getElementById("click-option10");
         var item11 = document.getElementById("click-option11");
         var item12 = document.getElementById("click-option12");

         var icon1 = document.getElementById("icon-1");
         var icon2 = document.getElementById("icon-2");
         var icon3 = document.getElementById("icon-3");
         var icon4 = document.getElementById("icon-4");
         var icon5 = document.getElementById("icon-5");
         var icon6 = document.getElementById("icon-6");
         var icon7 = document.getElementById("icon-7");
         var icon8 = document.getElementById("icon-8");
         var icon9 = document.getElementById("icon-9");
         var icon10 = document.getElementById("icon-10");
         var icon11 = document.getElementById("icon-11");
         var icon12 = document.getElementById("icon-12");
         
            function active1(){
                item1.style.display = "block";
                item2.style.display = "none";
                item3.style.display = "none";
                item4.style.display = "none";
                item5.style.display = "none";
                item6.style.display = "none";
                item7.style.display = "none";
                item8.style.display = "none";
                item9.style.display = "none";
                item10.style.display = "none";
                item11.style.display = "none";
                item12.style.display = "none";

                icon1.classList.add("myStyle");
                icon2.classList.remove("myStyle");
                icon3.classList.remove("myStyle");
                icon4.classList.remove("myStyle");
                icon5.classList.remove("myStyle");
                icon6.classList.remove("myStyle");
                icon7.classList.remove("myStyle");
                icon8.classList.remove("myStyle");
                icon9.classList.remove("myStyle");
                icon10.classList.remove("myStyle");
                icon11.classList.remove("myStyle");
                icon12.classList.remove("myStyle");
            }

            function active2(){
                item1.style.display = "none";
                item2.style.display = "block";
                item3.style.display = "none";
                item4.style.display = "none";
                item5.style.display = "none";
                item6.style.display = "none";
                item7.style.display = "none";
                item8.style.display = "none";
                item9.style.display = "none";
                item10.style.display = "none";
                item11.style.display = "none";
                item12.style.display = "none";

                icon1.classList.remove("myStyle");
                icon2.classList.add("myStyle");
                icon3.classList.remove("myStyle");
                icon4.classList.remove("myStyle");
                icon5.classList.remove("myStyle");
                icon6.classList.remove("myStyle");
                icon7.classList.remove("myStyle");
                icon8.classList.remove("myStyle");
                icon9.classList.remove("myStyle");
                icon10.classList.remove("myStyle");
                icon11.classList.remove("myStyle");
                icon12.classList.remove("myStyle");

                icon1.classList.remove("first-icon");
            }

            function active3(){
                item2.style.display = "none";
                item1.style.display = "none";
                item3.style.display = "block";
                item4.style.display = "none";
                item5.style.display = "none";
                item6.style.display = "none";
                item7.style.display = "none";
                item8.style.display = "none";
                item9.style.display = "none";
                item10.style.display = "none";
                item11.style.display = "none";
                item12.style.display = "none";

                icon1.classList.remove("myStyle");
                icon2.classList.remove("myStyle");
                icon3.classList.add("myStyle");
                icon4.classList.remove("myStyle");
                icon5.classList.remove("myStyle");
                icon6.classList.remove("myStyle");
                icon7.classList.remove("myStyle");
                icon8.classList.remove("myStyle");
                icon9.classList.remove("myStyle");
                icon10.classList.remove("myStyle");
                icon11.classList.remove("myStyle");
                icon12.classList.remove("myStyle");

                icon1.classList.remove("first-icon");

            }

            function active4(){
                item2.style.display = "none";
                item1.style.display = "none";
                item3.style.display = "none";
                item4.style.display = "block";
                item5.style.display = "none";
                item6.style.display = "none";
                item7.style.display = "none";
                item8.style.display = "none";
                item9.style.display = "none";
                item10.style.display = "none";
                item11.style.display = "none";
                item12.style.display = "none";

                icon1.classList.remove("myStyle");
                icon2.classList.remove("myStyle");
                icon3.classList.remove("myStyle");
                icon4.classList.add("myStyle");
                icon5.classList.remove("myStyle");
                icon6.classList.remove("myStyle");
                icon7.classList.remove("myStyle");
                icon8.classList.remove("myStyle");
                icon9.classList.remove("myStyle");
                icon10.classList.remove("myStyle");
                icon11.classList.remove("myStyle");
                icon12.classList.remove("myStyle");

                icon1.classList.remove("first-icon");


            }

            function active5(){
                item2.style.display = "none";
                item1.style.display = "none";
                item3.style.display = "none";
                item4.style.display = "none";
                item5.style.display = "block";
                item6.style.display = "none";
                item7.style.display = "none";
                item8.style.display = "none";
                item9.style.display = "none";
                item10.style.display = "none";
                item11.style.display = "none";
                item12.style.display = "none";

                icon1.classList.remove("myStyle");
                icon2.classList.remove("myStyle");
                icon3.classList.remove("myStyle");
                icon4.classList.remove("myStyle");
                icon5.classList.add("myStyle");
                icon6.classList.remove("myStyle");
                icon7.classList.remove("myStyle");
                icon8.classList.remove("myStyle");
                icon9.classList.remove("myStyle");
                icon10.classList.remove("myStyle");
                icon11.classList.remove("myStyle");
                icon12.classList.remove("myStyle");

                icon1.classList.remove("first-icon");

            }

            function active6(){
                item2.style.display = "none";
                item1.style.display = "none";
                item3.style.display = "none";
                item4.style.display = "none";
                item5.style.display = "none";
                item6.style.display = "block";
                item7.style.display = "none";
                item8.style.display = "none";
                item9.style.display = "none";
                item10.style.display = "none";
                item11.style.display = "none";
                item12.style.display = "none";

                icon1.classList.remove("myStyle");
                icon2.classList.remove("myStyle");
                icon3.classList.remove("myStyle");
                icon4.classList.remove("myStyle");
                icon5.classList.remove("myStyle");
                icon6.classList.add("myStyle");
                icon7.classList.remove("myStyle");
                icon8.classList.remove("myStyle");
                icon9.classList.remove("myStyle");
                icon10.classList.remove("myStyle");
                icon11.classList.remove("myStyle");
                icon12.classList.remove("myStyle");

                icon1.classList.remove("first-icon");

            }

            function active7(){
                item2.style.display = "none";
                item1.style.display = "none";
                item3.style.display = "none";
                item4.style.display = "none";
                item5.style.display = "none";
                item6.style.display = "none";
                item7.style.display = "block";
                item8.style.display = "none";
                item9.style.display = "none";
                item10.style.display = "none";
                item11.style.display = "none";
                item12.style.display = "none";

                icon1.classList.remove("myStyle");
                icon2.classList.remove("myStyle");
                icon3.classList.remove("myStyle");
                icon4.classList.remove("myStyle");
                icon5.classList.remove("myStyle");
                icon6.classList.remove("myStyle");
                icon7.classList.add("myStyle");
                icon8.classList.remove("myStyle");
                icon9.classList.remove("myStyle");
                icon10.classList.remove("myStyle");
                icon11.classList.remove("myStyle");
                icon12.classList.remove("myStyle");

                icon1.classList.remove("first-icon");

            }

            function active8(){
                item2.style.display = "none";
                item1.style.display = "none";
                item3.style.display = "none";
                item4.style.display = "none";
                item5.style.display = "none";
                item6.style.display = "none";
                item7.style.display = "none";
                item8.style.display = "block";
                item9.style.display = "none";
                item10.style.display = "none";
                item11.style.display = "none";
                item12.style.display = "none";

                icon1.classList.remove("myStyle");
                icon2.classList.remove("myStyle");
                icon3.classList.remove("myStyle");
                icon4.classList.remove("myStyle");
                icon5.classList.remove("myStyle");
                icon6.classList.remove("myStyle");
                icon7.classList.remove("myStyle");
                icon8.classList.add("myStyle");
                icon9.classList.remove("myStyle");
                icon10.classList.remove("myStyle");
                icon11.classList.remove("myStyle");
                icon12.classList.remove("myStyle");

                icon1.classList.remove("first-icon");

            }

            function active9(){
                item2.style.display = "none";
                item1.style.display = "none";
                item3.style.display = "none";
                item4.style.display = "none";
                item5.style.display = "none";
                item6.style.display = "none";
                item7.style.display = "none";
                item8.style.display = "none";
                item9.style.display = "block";
                item10.style.display = "none";
                item11.style.display = "none";
                item12.style.display = "none";

                icon1.classList.remove("myStyle");
                icon2.classList.remove("myStyle");
                icon3.classList.remove("myStyle");
                icon4.classList.remove("myStyle");
                icon5.classList.remove("myStyle");
                icon6.classList.remove("myStyle");
                icon7.classList.remove("myStyle");
                icon8.classList.remove("myStyle");
                icon9.classList.add("myStyle");
                icon10.classList.remove("myStyle");
                icon11.classList.remove("myStyle");
                icon12.classList.remove("myStyle");

                icon1.classList.remove("first-icon");

            }

            function active10(){
                item2.style.display = "none";
                item1.style.display = "none";
                item3.style.display = "none";
                item4.style.display = "none";
                item5.style.display = "none";
                item6.style.display = "none";
                item7.style.display = "none";
                item8.style.display = "none";
                item9.style.display = "none";
                item10.style.display = "block";
                item11.style.display = "none";
                item12.style.display = "none";

                icon1.classList.remove("myStyle");
                icon2.classList.remove("myStyle");
                icon3.classList.remove("myStyle");
                icon4.classList.remove("myStyle");
                icon5.classList.remove("myStyle");
                icon6.classList.remove("myStyle");
                icon7.classList.remove("myStyle");
                icon8.classList.remove("myStyle");
                icon9.classList.remove("myStyle");
                icon10.classList.add("myStyle");
                icon11.classList.remove("myStyle");
                icon12.classList.remove("myStyle");

                icon1.classList.remove("first-icon");

            }

            function active11(){
                item2.style.display = "none";
                item1.style.display = "none";
                item3.style.display = "none";
                item4.style.display = "none";
                item5.style.display = "none";
                item6.style.display = "none";
                item7.style.display = "none";
                item8.style.display = "none";
                item9.style.display = "none";
                item10.style.display = "none";
                item11.style.display = "block";
                item12.style.display = "none";

                icon1.classList.remove("myStyle");
                icon2.classList.remove("myStyle");
                icon3.classList.remove("myStyle");
                icon4.classList.remove("myStyle");
                icon5.classList.remove("myStyle");
                icon6.classList.remove("myStyle");
                icon7.classList.remove("myStyle");
                icon8.classList.remove("myStyle");
                icon9.classList.remove("myStyle");
                icon10.classList.remove("myStyle");
                icon11.classList.add("myStyle");
                icon12.classList.remove("myStyle");

                icon1.classList.remove("first-icon");

            }

            function active12(){
                item2.style.display = "none";
                item1.style.display = "none";
                item3.style.display = "none";
                item4.style.display = "none";
                item5.style.display = "none";
                item6.style.display = "none";
                item7.style.display = "none";
                item8.style.display = "none";
                item9.style.display = "none";
                item10.style.display = "none";
                item11.style.display = "none";
                item12.style.display = "block";

                icon1.classList.remove("myStyle");
                icon2.classList.remove("myStyle");
                icon3.classList.remove("myStyle");
                icon4.classList.remove("myStyle");
                icon5.classList.remove("myStyle");
                icon6.classList.remove("myStyle");
                icon7.classList.remove("myStyle");
                icon8.classList.remove("myStyle");
                icon9.classList.remove("myStyle");
                icon10.classList.remove("myStyle");
                icon11.classList.remove("myStyle");
                icon12.classList.add("myStyle");

                icon1.classList.remove("first-icon");

            }

            setTimeout(() => {
                active1()
            }, 1000);

            setTimeout(() => {
                active2()
            }, 5000);

            setTimeout(() => {
                active3()
            }, 10000);

            setTimeout(() => {
                active4()
            }, 15000);

            setTimeout(() => {
                active5()
            }, 20000);

            setTimeout(() => {
                active6()
            }, 25000);

            setTimeout(() => {
                active7()
            }, 30000);

            setTimeout(() => {
                active8()
            }, 35000);

            setTimeout(() => {
                active9()
            }, 40000);

            setTimeout(() => {
                active10()
            }, 45000);

            setTimeout(() => {
                active11()
            }, 50000);

            setTimeout(() => {
                active12()
            }, 55000);


            

            
