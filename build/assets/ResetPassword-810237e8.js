import{o as c,e as f,b as o,u as e,w as l,F as w,a as t,n as _,g,i as V}from"./app-8ec8fd77.js";import{T as b,Z as k}from"./index.esm-97b1216e.js";import{A as v}from"./AuthenticationCard-88c64331.js";import{_ as x}from"./AuthenticationCardLogo-da117652.js";import{_ as m,a as i}from"./TextInput-b58e2c86.js";import{_ as n}from"./InputLabel-3c3abc77.js";import{_ as y}from"./PrimaryButton-5f4d70a3.js";import"./_plugin-vue_export-helper-c27b6911.js";const P=["onSubmit"],$={class:"mt-4"},C={class:"mt-4"},S={class:"flex items-center justify-end mt-4"},T={__name:"ResetPassword",props:{email:String,token:String},setup(p){const d=p,s=b({token:d.token,email:d.email,password:"",password_confirmation:""}),u=()=>{s.post(route("password.update"),{onFinish:()=>s.reset("password","password_confirmation")})};return(h,a)=>(c(),f(w,null,[o(e(k),{title:"Reset Password"}),o(v,null,{logo:l(()=>[o(x)]),default:l(()=>[t("form",{onSubmit:V(u,["prevent"])},[t("div",null,[o(n,{for:"email",value:"Email"}),o(m,{id:"email",modelValue:e(s).email,"onUpdate:modelValue":a[0]||(a[0]=r=>e(s).email=r),type:"email",class:"mt-1 block w-full",required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),o(i,{class:"mt-2",message:e(s).errors.email},null,8,["message"])]),t("div",$,[o(n,{for:"password",value:"Password"}),o(m,{id:"password",modelValue:e(s).password,"onUpdate:modelValue":a[1]||(a[1]=r=>e(s).password=r),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"new-password"},null,8,["modelValue"]),o(i,{class:"mt-2",message:e(s).errors.password},null,8,["message"])]),t("div",C,[o(n,{for:"password_confirmation",value:"Confirm Password"}),o(m,{id:"password_confirmation",modelValue:e(s).password_confirmation,"onUpdate:modelValue":a[2]||(a[2]=r=>e(s).password_confirmation=r),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"new-password"},null,8,["modelValue"]),o(i,{class:"mt-2",message:e(s).errors.password_confirmation},null,8,["message"])]),t("div",S,[o(y,{class:_({"opacity-25":e(s).processing}),disabled:e(s).processing},{default:l(()=>[g(" Reset Password ")]),_:1},8,["class","disabled"])])],40,P)]),_:1})],64))}};export{T as default};
