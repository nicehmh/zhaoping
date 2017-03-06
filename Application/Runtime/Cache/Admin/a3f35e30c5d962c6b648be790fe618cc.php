<?php if (!defined('THINK_PATH')) exit();?><html>  
<head>  
<script type="text/javascript">    
    
//将所有的checkbox全部选中  
function checkedAll(){     
    var objs = document.getElementsByTagName("input");    
    for(var i =0;i<objs.length;i++){    
       var obj = objs[i];    
       if(obj.type=="checkbox"){    
        if(i!=0){  
            if(obj.checked){   
                obj.checked=false;  
            }else{  
                obj.checked=true;  
            }    
        }  
       }    
    }    
}    
   
//取得选中的checkbox的值  
function getCheckboxValues(){     
    var objs = document.getElementsByTagName("input");    
    allValues='';      
    for(var i =0;i<objs.length;i++){    
        var obj = objs[i];    
        if(obj.type=="checkbox"){  
            allValues+=obj.value+",";     
        }  
       }    
    alert(allValues);  
}</script>   
</head>  
  
<body>  
<table id="DataList1">  
 <tr>  
  <th><input type="checkbox" onclick="checkedAll()" value="000"/></th><th>名称</th>  
 </tr>  
 <tr>  
  <td><input name="checkbox_name" type="checkbox" value="1"/></td>  
  <td>张三</td>  
 </tr>  
 <tr>  
  <td><input name="checkbox_name" type="checkbox" value="2"/></td>  
  <td>李四</td>  
 </tr>  
 <tr>  
  <td>  
  <input type="button"  value="操作" onclick="getCheckboxValues()"/>  
  </td>  
  </tr>  
</table>  
</body>  
</html>