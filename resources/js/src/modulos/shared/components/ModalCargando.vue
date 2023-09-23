<template lang="">
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body" style="width: 498px; height:215px">
            <div class="row">
                <div class="col">
                    <div v-if="isLoading === true">
                        <div class="d-flex justify-content-center">
                            <span class="loader"></span>
                        </div>
                        <div class="text-center my-3">
                            <h4>Danos unos segundos!</h4>
                            <h5>Estamos enviando tu informacion!</h5>
                        </div> 
                    </div>
                    <div v-if="isLoading === false && registroAdopcion === true">
                        <div class="success-checkmark">
                            <div class="check-icon">
                                <span class="icon-line line-tip"></span>
                                <span class="icon-line line-long"></span>
                                <div class="icon-circle"></div>
                                <div class="icon-fix"></div>
                            </div>
                        </div>
                        <div class="text-center ">
                            <h4>Gracias!</h4>
                            <h5>Te contactaremos a la brevedad!</h5>
                        </div>
                    </div>  
                    <div v-if="isLoading === false && registroAdopcion === false">
                        <div class="error-banmark">
                            <div class="ban-icon">
                                <span class="icon-line line-long-invert"></span>
                                <span class="icon-line line-long"></span>
                                <div class="icon-circle"></div>
                                <div class="icon-fix"></div>
                            </div>
                        </div>
                        <div class="text-center ">
                            <h4>Ups!!</h4>
                            <h5>Tuvimos un incoveniente al enviar tu informacion!. Favor, vuelve a intentarlo</h5>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        
        </div>
    </div>
    </div>
</template>
<script>
import {mapState} from 'vuex';

export default {

    data(){
        return{
        };
    },
    computed:{
        ...mapState('huellas',['registroAdopcion','isLoading']),
    }
}
</script>
<style >
  .loader {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    max-width: 6rem;
    margin-top: 3rem;
    margin-bottom: 3rem;
  }
  .loader:before,
  .loader:after {
    content: "";
    position: absolute;
    border-radius: 50%;
    animation: pulsOut 1.8s ease-in-out infinite;
    filter: drop-shadow(0 0 1rem rgba(83, 138, 189, 0.75));
  }
  .loader:before {
    width: 100%;
    padding-bottom: 100%;
    box-shadow: inset 0 0 0 1rem #b3b1b1;
    animation-name: pulsIn;
  }
  .loader:after {
    width: calc(100% - 2rem);
    padding-bottom: calc(100% - 2rem);
    box-shadow: 0 0 0 0 #3326a8;
  }

  @keyframes pulsIn {
    0% {
      box-shadow: inset 0 0 0 1rem #32abad;
      opacity: 1;
    }
    50%, 100% {
      box-shadow: inset 0 0 0 0 #32abad;
      opacity: 0;
    }
  }

  @keyframes pulsOut {
    0%, 50% {
      box-shadow: 0 0 0 0 #32abad;
      opacity: 0;
    }
    100% {
      box-shadow: 0 0 0 1rem #32abad;
      opacity: 1;
    }
  }
      
  .success-checkmark {
    width: 80px;
    height: 115px;
    margin: 0 auto;
    
    .check-icon {
        width: 80px;
        height: 80px;
        position: relative;
        border-radius: 50%;
        box-sizing: content-box;
        border: 4px solid #32abad;
        
        &::before {
            top: 3px;
            left: -2px;
            width: 30px;
            transform-origin: 100% 50%;
            border-radius: 100px 0 0 100px;
        }
        
        &::after {
            top: 0;
            left: 30px;
            width: 60px;
            transform-origin: 0 50%;
            border-radius: 0 100px 100px 0;
            animation: rotate-circle 4.25s ease-in;
        }
        
        &::before, &::after {
            content: '';
            height: 100px;
            position: absolute;
            background: #FFFFFF;
            transform: rotate(-45deg);
        }
        
        .icon-line {
            height: 5px;
            background-color: #32abad;
            display: block;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            
            &.line-tip {
                top: 46px;
                left: 14px;
                width: 25px;
                transform: rotate(45deg);
                animation: icon-line-tip 0.75s;
            }
            
            &.line-long {
                top: 38px;
                right: 8px;
                width: 47px;
                transform: rotate(-45deg);
                animation: icon-line-long 0.75s;
            }
        }
        
        .icon-circle {
            top: -4px;
            left: -4px;
            z-index: 10;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            position: absolute;
            box-sizing: content-box;
            border: 4px solid #32abad;
        }
        
        .icon-fix {
            top: 8px;
            width: 5px;
            left: 26px;
            z-index: 1;
            height: 85px;
            position: absolute;
            transform: rotate(-45deg);
            background-color: #FFFFFF;
        }
    }
}

@keyframes rotate-circle {
    0% {
        transform: rotate(-45deg);
    }
    5% {
        transform: rotate(-45deg);
    }
    12% {
        transform: rotate(-405deg);
    }
    100% {
        transform: rotate(-405deg);
    }
}

@keyframes icon-line-tip {
    0% {
        width: 0;
        left: 1px;
        top: 19px;
    }
    54% {
        width: 0;
        left: 1px;
        top: 19px;
    }
    70% {
        width: 50px;
        left: -8px;
        top: 37px;
    }
    84% {
        width: 17px;
        left: 21px;
        top: 48px;
    }
    100% {
        width: 25px;
        left: 14px;
        top: 45px;
    }
}

@keyframes icon-line-long {
    0% {
        width: 0;
        right: 46px;
        top: 54px;
    }
    65% {
        width: 0;
        right: 46px;
        top: 54px;
    }
    84% {
        width: 55px;
        right: 0px;
        top: 35px;
    }
    100% {
        width: 47px;
        right: 8px;
        top: 38px;
    }
}

/* // Error icon */
.error-banmark {
    width: 80px;
    height: 115px;
    margin: 0 auto;
    
    .ban-icon {
        width: 80px;
        height: 80px;
        position: relative;
        border-radius: 50%;
        box-sizing: content-box;
        border: 4px solid rgb(175, 76, 76);
        
        &::before {
            top: 3px;
            left: -2px;
            width: 30px;
            transform-origin: 100% 50%;
            border-radius: 100px 0 0 100px;
        }
        
        &::after {
            top: 0;
            left: 30px;
            width: 60px;
            transform-origin: 0 50%;
            border-radius: 0 100px 100px 0;
            animation: rotate-circle 4.25s ease-in;
        }
        
        &::before, &::after {
            content: '';
            height: 100px;
            position: absolute;
            background: rgba(255, 255, 255, 0);
            transform: rotate(-45deg);
        }
        
        .icon-line {
            height: 5px;
            background-color: rgb(175, 76, 76);
            display: block;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            
            &.line-long-invert {
                top: 39px;
                left: 8px;
                width: 60px;
                transform: rotate(45deg);
                animation: icon-line-long 0.75s;
            }
            
            &.line-long {
                top: 39px;
                left: 8px;
                width: 60px;
                transform: rotate(-45deg);
                animation: icon-line-long 0.85s;
            }
        }
        
        .icon-circle {
            top: -4px;
            left: -4px;
            z-index: 10;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            position: absolute;
            box-sizing: content-box;
            border: 4px solid rgba(175, 76, 76, 0.5);
        }
        
        .icon-fix {
            top: 8px;
            width: 5px;
            left: 26px;
            z-index: 1;
            height: 85px;
            position: absolute;
            transform: rotate(-45deg);
            background-color: rgba(255, 255, 255, 0);
        }
    }
}


</style>