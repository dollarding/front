


var appDemo = angular.module('Coupit', ['ui.bootstrap','ngRoute','angulike','ngMap']);

appDemo.run([
      '$rootScope', function ($rootScope) {
          $rootScope.facebookAppId = '190322544333196'; // set your facebook app id here
      }
  ]);



appDemo.config(function($compileProvider) {

  $compileProvider.aHrefSanitizationWhitelist(/^\s*(geo):/);
  $compileProvider.aHrefSanitizationWhitelist(/^\s*(whatsapp):/);

});

appDemo.config(function($routeProvider,$locationProvider){


$routeProvider.when("/", {
  redirectTo: '/home'

})



$routeProvider.when("/your_site_benefit/",{
  controller:"BeneficioCtrl",
  templateUrl:"view/adnet.html",

})

$routeProvider.when("/benefit/:_id",{
  controller:"BeneficioIdCtrl",
  templateUrl:"view/benefit.html",

})



$routeProvider.when("/shared/:_id",{
  controller:"BeneficioIdCtrl",
  templateUrl:"view/shared.html"
})

$routeProvider.when("/about/", {
  controller:"BeneficioCtrl",
  templateUrl:"view/about.html"
})

$routeProvider.when("/adnetworks/", {
  controller:"BeneficioCtrl",
  templateUrl:"view/adnetwork.html"
})

$routeProvider.when("/application/", {
  controller:"BeneficioCtrl",
  templateUrl:"view/aplication.html"
})

$routeProvider.when("/budget/", {
  controller:"BeneficioCtrl",
  templateUrl:"view/budget.html"
})

$routeProvider.when("/carousela/", {
  controller:"BeneficioCtrl",
  templateUrl:"view/carousela.html"
})

$routeProvider.when("/contact/", {
  controller:"BeneficioCtrl",
  templateUrl:"view/contact.html"
})

$routeProvider.when("/cost/", {
  controller:"BeneficioCtrl",
  templateUrl:"view/cost.html"
})

$routeProvider.when("/customer/", {
  controller:"BeneficioCtrl",
  templateUrl:"view/customer.html"
})

$routeProvider.when("/facecoup/", {
  controller:"BeneficioCtrl",
  templateUrl:"view/facecoup.html"
})

$routeProvider.when("/howitworks/", {
  controller:"BeneficioCtrl",
  templateUrl:"view/howitworks.html"
})

$routeProvider.when("/print-to-digital/", {
  controller:"BeneficioCtrl",
  templateUrl:"view/print-to-digital.html"
})

$routeProvider.when("/sales/", {
  controller:"BeneficioCtrl",
  templateUrl:"view/salesnew.html"
})

$routeProvider.when("/testimonials/", {
  controller:"BeneficioCtrl",
  templateUrl:"view/testimonials.html"
})

$routeProvider.when("/test/", {
  controller:"BeneficioCtrl",
  templateUrl:"view/test.html"
})

$routeProvider.when("/terms/", {
  controller:"BeneficioCtrl",
  templateUrl:"view/terms.html"
})

$routeProvider.when("/newproduct/", {
   controller:"BeneficioCtrl",
  templateUrl:"view/newproduct.html"
})


$routeProvider.when("/home/", {
  controller:"BeneficioCtrl",
  templateUrl:"view/home.html"
})


.otherwise({

controller:"BeneficioCtrl",
templateUrl:"view/home.html"

});

$locationProvider.html5Mode(true);

});




appDemo.directive('compileTemplate', function($compile, $parse){
    return {
        link: function(scope, element, attr){
            var parsed = $parse(attr.ngBindHtml);
            function getStringValue() { return (parsed(scope) || '').toString(); }

            //Recompile if the template changes
            scope.$watch(getStringValue, function() {
                $compile(element, null, -9999)(scope);  //The -9999 makes it skip directives so that we do not recompile ourselves
            });
        }
    }
});

appDemo.controller('MyControllerMap', function(NgMap) {

  NgMap.getMap().then(function(map) {

      vm.map = map;
        });

      });

appDemo.controller('myController', [
      '$scope', function ($scope) {
          $scope.Home = {
              Url: '/#/test/',
              Name: "NewDeals - רק הטבות טובות",
              Description:'שירותי הדיגיטל של קופיט מאפשרים לכם לפגוש אלפי לקוחות ביעילות ובחדשנות - נסו עכשיו!',
              ImageUrl: '/img/homefb.png'
          };
          $scope.Sales = {
              Url: '/#/sales/',
              Name: "בעל עסק הצטרף בחינם עכשיו!",
              Description:'שירותי הדיגיטל של קופיט מאפשרים לכם לפגוש אלפי לקוחות ביעילות ובחדשנות - נסו עכשיו!',
              ImageUrl: '/img/OurServices.png'

          };

      }
  ]);




appDemo.controller('CollapseDemoCtrl', function ($scope,$uibModal) {
  $scope.isCollapsed = false;



$scope.ir = function(dir) {
 window.location.href = dir;
}



$scope.cambioMongo= function(){

$scope.mango = !$scope.mango;
}

$scope.showModalContacto4= function(){
  $scope.cambioMongo();
  $scope.idCargar='id';
  $scope.nombre='nombre';
  var modalInstance=$uibModal.open({templateUrl:"view/ModalContacto4.html",
  controller:"DatosBeneficioCtrl",size:'', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
}

});

}


$scope.showModalContacto3= function(){
  $scope.cambioMongo();
  $scope.idCargar='id';
  $scope.nombre='nombre';
var modalInstance=$uibModal.open({templateUrl:"view/ModalContacto3.html",
controller:"DatosBeneficioCtrl",size:'', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
}

});

}


$scope.showThanks= function(){
  $scope.cambioMongo();
  $scope.idCargar='id';
  $scope.nombre='nombre';
var modalInstance=$uibModal.open({templateUrl:"view/ModalGracias.html",
controller:"DatosBeneficioCtrl",size:'sm', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
}

});

}

$scope.showModalMasBene= function(){

  $scope.idCargar='id';
  $scope.nombre='nombre';
var modalInstance=$uibModal.open({templateUrl:"view/modalMasBen.html",
controller:"DatosBeneficioCtrl",size:'sm', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
}

});

}



$scope.showModalSale1= function(){

  $scope.idCargar='id';
  $scope.nombre='nombre';
var modalInstance=$uibModal.open({templateUrl:"view/ModalSales1.html",
controller:"DatosBeneficioCtrl",size:'lg', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
}

});

}




$scope.showModalSale2= function(){

  $scope.idCargar='id';
  $scope.nombre='nombre';
var modalInstance=$uibModal.open({templateUrl:"view/ModalSales2.html",
controller:"DatosBeneficioCtrl",size:'lg', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
}

});

}



$scope.showModalSale3= function(){

  $scope.idCargar='id';
  $scope.nombre='nombre';
var modalInstance=$uibModal.open({templateUrl:"view/ModalSales3.html",
controller:"DatosBeneficioCtrl",size:'lg', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
}

});

}


});



appDemo.controller('PopoverDemoCtrl', function ($scope, $sce,$uibModal) {
  $scope.dynamicPopover = {
    content: 'Hello, World!',
    templateUrl: 'myPopoverTemplate.html',
    title: 'Title'
  };

  $scope.placement = {
    options: [
      'top',
      'top-left',
      'top-right',
      'bottom',
      'bottom-left',
      'bottom-right',
      'left',
      'left-top',
      'left-bottom',
      'right',
      'right-top',
      'right-bottom'
    ],
    selected: 'top'
  };

  $scope.html = '<div class="modal-header modal-headerOne"><h3 dir="rtl">במה אתה מעוניין?</h3></div><dir class="modal-body4"><center><button type="button" class="chincho2b wow bounceIn animated" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;"><i class="glyphicon glyphicon-bullhorn"></i><br/><h4 class="lds" dir="rtl">למדו על הדיגיטל</h4></button><button type="button" class="chincho2 wow bounceIn animated" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;" ng-click="showModalContacto()"><i class="glyphicon glyphicon-earphone"></i><br/><h4 class="lds" dir="rtl">רוצה שנחזור אליך</h4></button><button type="button" class="chincho2 wow bounceIn animated" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;" ng-click="showModalMasBene()"><i class="glyphicon glyphicon-plus-sign"></i><br/><h4 class="lds" dir="rtl">העלאה הטבה או מוצר</h4></button></center></dir>';

  $scope.htmlPopover = $sce.trustAsHtml($scope.html);



$scope.showModalContacto4= function(){

  $scope.idCargar='id';
  $scope.nombre='nombre';
  var modalInstance=$uibModal.open({templateUrl:"view/ModalContacto4.html",
  controller:"DatosBeneficioCtrl",size:'', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
}

});

}


$scope.showModalContacto3= function(){

  $scope.idCargar='id';
  $scope.nombre='nombre';
var modalInstance=$uibModal.open({templateUrl:"view/ModalContacto3.html",
controller:"DatosBeneficioCtrl",size:'', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
}

});

}


$scope.showModalMasBene= function(){

  $scope.idCargar='id';
  $scope.nombre='nombre';
var modalInstance=$uibModal.open({templateUrl:"view/modalMasBen.html",
controller:"DatosBeneficioCtrl",size:'sm', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
}

});

}





});



appDemo.controller('HomeCtrl', ['$scope','$http','$uibModal', 'upload', function ($scope,$http,$uibModal, upload)
{



$scope.saco= function(){
  console.log('putaso');
$scope.sacos = !$scope.sacos;
}


$scope.showThanks2= function(){
  $scope.idCargar='id';
  $scope.nombre='nombre';
var modalInstance=$uibModal.open({templateUrl:"view/ModalGracias2.html",
controller:"DatosBeneficioCtrl",size:'sm', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
}

});

}


$scope.showThanks= function(){
  $scope.idCargar='id';
  $scope.nombre='nombre';

var modalInstance=$uibModal.open({templateUrl:"view/ModalGracias.html",
controller:"DatosBeneficioCtrl",size:'sm', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
}

});

}

  $scope.uploadFile = function(tipo)
  {
    var name = $scope.name;
    var file = $scope.file;
    upload.uploadFile(file, name).then(function(res)
    {
      console.log(res);
     if(tipo==1){
      $scope.datof ='http://coupit.co.il/files/'+res.data;
      }else if(tipo==2){
      $scope.datof2 = 'http://coupit.co.il/files/'+res.data;
       }

    })
  }


$scope.fileNameChanged = function() {
  console.log("select file");

  setTimeout(function(){ $scope.uploadFile(1)}, 1000);
}

$scope.cancela1 = function() {

  setTimeout(function(){ window.location.href ="/home.html";}, 4000);

}

$scope.fileNameChanged2 = function() {
  console.log("select file");

  setTimeout(function(){ $scope.uploadFile(2)}, 1000);
}

$scope.sendNewslater= function(pdato){
$scope.pMail="info@newDeals.co.il";
$scope.email=pdato;
console.log('mando Newslater' + $scope.email);

$http.post('newslater.php', {mail: $scope.pMail ,email: $scope.email } )
                .success(function(data) {
                        $scope.names = eval(data);
                        console.log(data)
                    })
                .error(function(data) {
                        console.log('Error: ' + data);
                });

 $scope.showThanks2();

 $scope.pMail="";
 $scope.email="";

}


$scope.sendNewslaterContact = function(name,tel,email,mensaje) {

$scope.pMail="info@newdeals.com";
$scope.mensaje="Name: "+ name + ", Telefon Number: "+ tel +", Mail: "+email+", Message :"+mensaje;

  console.log('mandoContacto');
        $http.post('contacto.php', {mail: $scope.pMail ,mensaje:$scope.mensaje} )
                .success(function(data) {
                        $scope.names = eval(data);
                        console.log(data)
                    })
                .error(function(data) {
                        console.log('Error: ' + data);
                });

        $scope.name="";
        $scope.tel="";
        $scope.email="";
        $scope.mensaje="";

        $scope.showThanks2();
        }


  $scope.sendMailCoupon= function(pdatof,pdatof2,pnameBenefit,pprise,pprise2,pnameBisness,ploc,ptel){

  $scope.pMail="info@newdeals.co.il";
  $scope.ImageBenefi=pdatof;
  $scope.Logo=pdatof2;
  $scope.NameBenefit=pnameBenefit;
  $scope.prise=pprise;
  $scope.prise2=pprise2;
  $scope.nameBisness=pnameBisness;
  $scope.loc=ploc;
  $scope.tel=ptel;


  console.log('mandoContacto');
        $http.post('newbeneficio.php', {mail: $scope.pMail ,ImageBenefcio: $scope.ImageBenefi, logo: $scope.Logo, nameBeneficio: $scope.NameBenefit , prise: $scope.prise, prise2: $scope.prise2,nameBisnes: $scope.nameBisness,loc: $scope.loc, tel: $scope.tel } )
                .success(function(data) {
                        $scope.names = eval(data);
                        console.log(data)
                    })
                .error(function(data) {
                        console.log('Error: ' + data);
                });
 $scope.showThanks();
 $scope.cancela1();
        }





  $scope.sendMailbeneficioNuevo= function(pdatof,pdatof2,pnameBenefit,pprise,pnameBisness,ploc,ptel){

  $scope.pMail="info@newdeals.co.il";
  $scope.ImageBenefi=pdatof;
  $scope.Logo=pdatof2;
  $scope.NameBenefit=pnameBenefit;
  $scope.prise=pprise;
  $scope.nameBisness=pnameBisness;
  $scope.loc=ploc;
  $scope.tel=ptel;

  console.log('mandoContacto');
        $http.post('newCopuon.php', {mail: $scope.pMail ,ImageBenefcio: $scope.ImageBenefi, logo: $scope.Logo, nameBeneficio: $scope.NameBenefit , prise: $scope.prise, nameBisnes: $scope.nameBisness, loc: $scope.loc, tel: $scope.tel } )
                .success(function(data) {
                        $scope.names = eval(data);
                        console.log(data);

                    })
                .error(function(data) {
                        console.log('Error: ' + data);
                });
 $scope.showThanks();
      $scope.pMail="";
  $scope.ImageBenefi="";
  $scope.Logo="";
  $scope.NameBenefit="";
  $scope.mensajedes="";
  $scope.marketing="";
  $scope.prise="";
  $scope.smalLeters="";
  $scope.nameBisness="";
  $scope.tel="";
  $scope.email="";
  $scope.cancela1();

        }


 $scope.cancela1 = function() {

  setTimeout(function(){ window.location.href ="/home.html";}, 3000);

}

}])

.directive('uploaderModel', ["$parse", function ($parse) {
  return {
    restrict: 'A',
    link: function (scope, iElement, iAttrs)
    {
      iElement.on("change", function(e)
      {
        $parse(iAttrs.uploaderModel).assign(scope, iElement[0].files[0]);
      });
    }
  };
}])

.service('upload', ["$http", "$q", function ($http, $q)
{
  this.uploadFile = function(file, name)
  {
    var deferred = $q.defer();
    var formData = new FormData();
    formData.append("name", name);
    formData.append("file", file);
    return $http.post("server.php", formData, {
      headers: {
        "Content-type": undefined
      },
      transformRequest: angular.identity
    })
    .success(function(res)
    {
      deferred.resolve(res);
    })
    .error(function(msg, code)
    {
      deferred.reject(msg);
    })
    return deferred.promise;
  }
}]);





appDemo.controller('PageCtrl', function ($scope, $http,$routeParams, $uibModal){

$scope.create = function(ira) {
  console.log(ira);
  window.location.href =ira;
}

});




appDemo.controller('BeneficioIdCtrl', function ($scope, $http,$routeParams, $uibModal){
$scope.beneficio={}

 $http.get('http://34.251.180.226/coupons/'+$routeParams._id)
.success(function(data){
            if(typeof(data)=='object'){

                $scope.beneficio=data.coupon;
                console.log(data);


            }else{

                alert('beneficios null');
            }
        }).error(function(){

            alert('beneficios null 2');
        });

//$scope.showModalDamelo(routeParams._id);

$scope.showModalDamelo= function(id){

$scope.idCargar=id;
$scope.nombre='nombre';


setTimeout(function(){
var modalInstance=$uibModal.open({templateUrl:"view/ModalDamelo.html",
controller:"DatosBeneficioCtrl",size:'sm', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
      }
});

}
, 1000);

}

$scope.createNewTab = function(ira) {
  console.log(ira);
  window.open(ira, '_blank');
}

$scope.create = function(ira) {
  console.log(ira);
  window.location.href =ira;
}

$scope.create2 = function(ira) {
  console.log(ira);

  }



$scope.showModalHorarios= function (id){
$scope.idCargar=id;
$scope.nombre='holis';
var modalInstance=$uibModal.open({templateUrl:"view/ModalHorario.html",
controller:"DatosBeneficioCtrl",size:'sm', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
      }
});
console.log("/ id: "+id);
}


$scope.showModalMostrar= function (id,haveCode,codeNumber){
$scope.idCargar=id;
$scope.nombre='holis';
$scope.haveCode=haveCode;
$scope.codeNumber=codeNumber;
if($scope.haveCode)
{
      var newCode = prompt("נא להזין קוד למימוש:", "");
      while (newCode == null || newCode != $scope.codeNumber) {
          newCode = prompt("הקוד אינו נכון, נא להזין שנית:", "");
  }
}
  var modalInstance=$uibModal.open({templateUrl:"view/modalMostrar.html",
  controller:"DatosBeneficioCtrl",size:'sm', resolve: {
          items: function () {
            return $scope.idCargar;
          },
          nombre: function () {
            return $scope.nombre;
          }
        }
  });
}
  // var newCode=$uibModal.open({templateUrl:"view/modalUse.html",
  // controller:"DatosBeneficioCtrl",size:'sm', resolve: {
  //         items: function () {
  //           alert("coden");
  //           return $scope.idCargar;
  //         },
  //         nombre: function () {
  //           return $scope.nombre;
  //         }
  //       }
//  });

  //    var newCode = prompt("Please enter your code:", "");
    //  while (newCode == null || newCode != $scope.codeNumber) {
      //    newCode = prompt("Please enter your code:", "");
      //}
//  }
//}
// else{
// var modalInstance=$uibModal.open({templateUrl:"view/modalMostrar.html",
// controller:"DatosBeneficioCtrl",size:'sm', resolve: {
//         items: function () {
//           return $scope.idCargar;
//         },
//         nombre: function () {
//           return $scope.nombre;
//         }
//       }
// });
// }
// }
//
// $scope.validateCode = function (inputCode,codeNumber){
//   $scope.code=inputCode;
//   $scope.codeNumber=codeNumber;
//   alert("onin");
//   if ($scope.code != null && $scope.code == $scope.codeNumber)
// {
//   var modalInstance=$uibModal.open({templateUrl:"view/modalMostrar.html",
//   controller:"DatosBeneficioCtrl",size:'sm', resolve: {
//           items: function () {
//             return;
//           },
//           nombre: function () {
//             return;
//           }
//         }
//   });
// }
// else{
//   $scope.showModalMostrar(11,true,$scope.codeNumber);
// }
//   //var newCode = prompt("Please enter your code:", "");
//   //   if ($scope.code != null && $scope.code != $scope.codeNumber) {
//     //     newCode = prompt("Please enter your code:", "");
//      //}
//   //$scope.showModalBigMO();
// }


// $scope.showModalLoc= function (loc,loc2){
// $scope.idCargar=loc2;
// $scope.nombre=loc;
// var modalInstance=$uibModal.open({templateUrl:"view/modalLocalizacion.html",
// controller:"DatosBeneficioCtrl",size:'lg', resolve: {
//         items: function () {
//           return $scope.idCargar;
//         },
//         nombre: function () {
//           return $scope.nombre;
//         }
//       }
// });

//}



$scope.showModalShared= function (id){
$scope.idCargar=id;

$scope.nombre='/sharedBenefit.php?id='+id;

var modalInstance=$uibModal.open({templateUrl:"view/modalShare.html",
controller:"DatosBeneficioCtrl",size:'sm', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
      }
});

}



$scope.showModalBig= function(id,nombre){
$scope.idCargar=id;
$scope.nombre=nombre;
var modalInstance=$uibModal.open({templateUrl:"view/modalMail.html",
controller:"DatosBeneficioCtrl",size:'sm', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
      }
});
console.log("/ id: "+id);
}


$scope.showModalBig2= function(id,nombre){
$scope.idCargar=id;
$scope.nombre=nombre;
var modalInstance=$uibModal.open({templateUrl:"view/modalSMS.html",
controller:"DatosBeneficioCtrl",size:'sm', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }

      }
});
console.log("/ id: "+id);
}





});



appDemo.controller('BeneficioCtrl', function ($scope, $http, $uibModal){


$scope.id = "";


  $scope.coupons=[]; // all of coupons

    $scope.loadTheBenefit = function(){
        console.log("dale putaso");
        $http({
            method:'GET',url:'http://34.251.180.226/coupons'
        }).success(function(data){
            if(typeof(data)=='object'){

                $scope.coupons=data.coupons;
                resultado = data.coupons;
                console.log(data);

            }else{

               // alert('beneficios null');
            }
        }).error(function(){

            //alert('beneficios null 2');
        });


    }







$scope.actualizoLoc = function (localization , pdistance){

//console.log(localization[0]);
$scope.cuponsLocalization=[];
$scope.localizacion=localization;
$scope.cantidadResultados=0;
$http({
        method:'GET',url:'http://34.251.180.226/coupons'
        }).success(function(data){
            if(typeof(data)=='object'){
              angular.forEach(data.coupons, function(value, key) {
                var saberDiferencia = $scope.diferencia(localization[0],localization[1] , value.loc[0],value.loc[1],pdistance);
                if(saberDiferencia){
                $scope.cuponsLocalization.push(value);
                $scope.cantidadResultados++;
                }else{

                }
              });
                //
                //
                $scope.distancia = pdistance;
                if($scope.cantidadResultados>1){
                $scope.$parent.coupons=$scope.cuponsLocalization;

                }else{
                alert(' no benefits at this location');
                $scope.cantidadResultados =0;

                }
                console.log($scope.$parent.coupons);
                //$scope.$apply;

            }else{

               alert(' no benefits at this location ');
            }
        }).error(function(){

            alert('no benefits at this location ');
        });

}


$scope.diferencia = function (lat1, long1, lat2, long2,pdistance){

    var km = 111.302;

    //1 Grado = 0.01745329 Radianes
    var degtorad = 0.01745329;

    //1 Radian = 57.29577951 Grados
    var radtodeg = 57.29577951;

    dlong = (long1 - long2);
    dvalue = (Math.sin(lat1 * degtorad) * Math.sin(lat2 * degtorad)) + (Math.cos(lat1 * degtorad) * Math.cos(lat2 * degtorad) * Math.cos(dlong * degtorad));
    dd = Math.acos(dvalue) * radtodeg;
    var distancia = Math.round((dd * km), 2);
    //console.log(distancia);
    if(distancia<pdistance){
      return true;

    }else{

      return false;

    }

}


$scope.create = function(ira) {
  console.log(ira);
  window.location.href =ira;
}


$scope.showModalData= function (id,imagenGrande,logo,empresa,couponName,precioAntes,precioAhora,description,couponNumber,valido,loc,tel){
$scope.idCargar=[{"id":id,"imagenGrande":imagenGrande,"logo":logo,"empresa":empresa,"couponName":couponName,"precioAntes":precioAntes,"precioAhora":precioAhora,"description":description,"couponNumber":couponNumber,"valido":valido,"loc":loc,"tel":tel}];

var modalInstance=$uibModal.open({templateUrl:"view/modalData.html",
controller:"DatosBeneficioCtrl",size:'lg', resolve: {
        items: function () {
          return $scope.idCargar;
        }
      }
});
console.log("/ id: "+id);
}

$scope.showModalSMS= function (id){
$scope.idCargar=id;

var modalInstance=$uibModal.open({templateUrl:"view/modalSMS.html",
controller:"DatosBeneficioCtrl", resolve: {
        items: function () {
          return $scope.idCargar;
        }
      }
});
console.log("/ id: "+id);
}

$scope.showModalMail= function (id){
$scope.idCargar=id;
var modalInstance=$uibModal.open({templateUrl:"view/modalMail.html",
controller:"DatosBeneficioCtrl", resolve: {
        items: function () {
          return $scope.idCargar;
        }
      }
});
console.log("/ id: "+id);
}


$scope.cancel=function() {
    $uibModalInstance.dismiss("cancel");
    }

$scope.showModalDamelo= function(id,nombre){

$scope.idCargar=id;
$scope.nombre=nombre;
var modalInstance=$uibModal.open({templateUrl:"view/ModalDamelo2.html",
controller:"BeneficioCtrlPUTO",size:'sm', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }

      }
});
console.log("/ id: "+id);
}



$scope.showModalBig= function(id,nombre){
$scope.idCargar=$scope.$parent.id;
$scope.nombre=nombre;
var modalInstance=$uibModal.open({templateUrl:"view/modalMail.html",
controller:"DatosBeneficioCtrl",size:'sm', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
      }
});
console.log("/ id: "+id);
}


$scope.showModalBig2= function(id,nombre){
$scope.idCargar=$scope.$parent.id;
$scope.nombre=nombre;
var modalInstance=$uibModal.open({templateUrl:"view/modalSMS.html",

controller:"DatosBeneficioCtrl",size:'sm', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }

      }
});
console.log("/ id: "+id);
}




$scope.showModalContacto= function(){

  $scope.idCargar='id';
  $scope.nombre='nombre';
var modalInstance=$uibModal.open({templateUrl:"view/ModalContaco.html",
controller:"DatosBeneficioCtrl",size:' ', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
}

});

}


$scope.showModalContacto2= function(){
  $scope.idCargar='id';
  $scope.nombre='nombre';
var modalInstance=$uibModal.open({templateUrl:"view/ModalContaco2.html",
controller:"DatosBeneficioCtrl",size:' ', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
}

});

}

$scope.showModallocalizatiotrn= function(id){
$scope.idCargar=id;
var modalInstance=$uibModal.open({templateUrl:"view/modalLo.html",
controller:"DatosBeneficioCtrl", resolve: {
        items: function () {showModalContacto
          return $scope.idCargar;
        }
      }
});
console.log("/ id: "+id);
}

})



.controller('BeneficioCtrlPUTO', function ($scope,$http,$uibModal,$uibModalInstance,items,nombre){
console.log("items1"+items);
$scope.items=items;
$scope.nombre=nombre;

 $scope.cancel=function() {
    $uibModalInstance.dismiss("cancel");
    }
    $scope.cancel2=function() {

      setTimeout(function(){ $uibModalInstance.dismiss("cancela1");}, 3000);

    }

$scope.showModalBig= function(id,nombre){
  $scope.id=id;
  $scope.nombre=nombre;
 console.log("items2"+id);
var modalInstance=$uibModal.open({templateUrl:"view/modalMail.html",
controller:"DatosBeneficioCtrl",size:'sm', resolve: {
        items: function () {
          return $scope.id;
        },
        nombre: function () {
          return $scope.nombre;
        }
      }
});
console.log("/ id: "+id);
}


$scope.showModalBig2= function(id,nombre){
   console.log("items2"+id);
 $scope.id=id;
  $scope.nombre=nombre;
var modalInstance=$uibModal.open({templateUrl:"view/modalSMS.html",

controller:"DatosBeneficioCtrl",size:'sm', resolve: {
        items: function () {
         return $scope.id;
        },
        nombre: function () {
          return $scope.nombre;
        }

      }
});
console.log("/ id: "+id);
}



})


.controller('DatosBeneficioCtrl', function ($scope,$http,$uibModal,$uibModalInstance,$sce,items,nombre) {

    $scope.items=items;
    $scope.nombre=nombre;
    $scope.local = [nombre,items];
    $scope.local2= [nombre[1],nombre[0]];
    console.log('items =' +$scope.items);
    console.log('nombre =' +$scope.nombre);
    console.log('local = ' +$scope.local2);

    $scope.cancel=function() {
    $uibModalInstance.dismiss("cancel");
    }
    $scope.cancel2=function() {

      setTimeout(function(){ $uibModalInstance.dismiss("cancela1");}, 3000);

    }

     $scope.ok=function() {
     console.log("Desde el beneficio" +$scope.items);
    }

    $scope.create = function(ira) {
  console.log(ira);
  window.location.href =ira;
}


    $scope.createM = function(ira) {
  console.log(ira);
  window.open(ira,'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
  return false;
}



 $scope.cancela1 = function() {

  setTimeout(function(){ window.location.href ="/home.html";}, 3000);

}



$scope.showModalMasBene= function(){

  $scope.idCargar='id';
  $scope.nombre='nombre';
var modalInstance=$uibModal.open({templateUrl:"view/modalMasBen.html",
controller:"DatosBeneficioCtrl",size:'sm', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
}

});

}




$scope.showModalContacto4= function(){

  $scope.idCargar='id';
  $scope.nombre='nombre';
  var modalInstance=$uibModal.open({templateUrl:"view/ModalContacto4.html",
  controller:"DatosBeneficioCtrl",size:'', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
}

});

}


$scope.showModalContacto3= function(){

  $scope.idCargar='id';
  $scope.nombre='nombre';
var modalInstance=$uibModal.open({templateUrl:"view/ModalContacto3.html",
controller:"DatosBeneficioCtrl",size:'', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }
}

});

}



$scope.showModalBigMO= function(){
$scope.idCargar="09742";
$scope.nombre="BenefitOK";
var modalInstance=$uibModal.open({templateUrl:"view/ModalThanksGuy.html",
//var modalInstance=$uibModal.open({templateUrl:"view/modalSMS.html",
controller:"DatosBeneficioCtrl",size:'sm', resolve: {
        items: function () {
          return $scope.idCargar;
        },
        nombre: function () {
          return $scope.nombre;
        }

      }
});

}



$scope.test = function(id,cel) {
$scope.cel=cel;
$scope.url="/#/shared/"+id;
alert($scope.cel);

  console.log('mandoSMS');
        $http.post('sms.php', {cel: $scope.cel ,url:$scope.url } )
                .success(function(data) {
                        $scope.names = eval(data);
                        console.log(data)
                    })
                .error(function(data) {
                        console.log('Error: ' + data);
                });

        $scope.cel="";
        $scope.url="";

        $scope.showModalBigMO();
      }

$scope.sendSMS = function(id,cel) {
$scope.cel=cel;
$scope.url="/#/shared/"+id;
alert($scope.cel);

  console.log('mandoSMS');
        $http.post('sms.php', {cel: $scope.cel ,url:$scope.url } )
                .success(function(data) {
                        $scope.names = eval(data);
                        console.log(data)
                    })
                .error(function(data) {
                        console.log('Error: ' + data);
                });

        $scope.cel="";
        $scope.url="";

        $scope.showModalBigMO();
        }


$scope.sendMail = function(id,mail,nombre) {

$scope.pMail=mail;
$scope.url="/#/shared/"+id;
$scope.nombre=nombre;

  console.log('mandoMail');
        $http.post('mails.php', {mail: $scope.pMail ,url:$scope.url,Namebenebit:$scope.nombre } )
                .success(function(data) {
                        $scope.names = eval(data);
                        console.log(data)
                    })
                .error(function(data) {
                        console.log('Error: ' + data);
                });

        $scope.pMail="";
        $scope.url="";
        $scope.nombre="";
      $scope.showModalBigMO();
        }



$scope.sendMailContacto = function(name,tel,email,mensaje) {

$scope.pMail="info@newdeals.co.il";
$scope.mensaje="Name: "+ name + ", Telefon Number: "+ tel +", Mail: "+email+", Message :"+mensaje;

  console.log('mandoContacto');
        $http.post('contacto.php', {mail: $scope.pMail ,mensaje:$scope.mensaje} )
                .success(function(data) {
                        $scope.names = eval(data);
                        console.log(data)
                    })
                .error(function(data) {
                        console.log('Error: ' + data);
                });

        $scope.pMail="";
        $scope.mensaje="";
        $scope.cancela1();
        }





});
