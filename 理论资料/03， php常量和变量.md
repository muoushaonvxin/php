    变量的判断: isset() 和 empty
    变量的类型完全是根据值决定的，给变量赋一个什么类型的值，它就是一个什么类型的变量。
    基本数据类型: string, int, float, boolean
    特殊的数据类型: null  (没有赋值的变量是空型)
    $name = "";
    $name = $name + "毕业院校";
    
    echo $name 的毕业院校。
    
    一段小的示例代码:
        <?php
            $name = "周鲠生";
            $sex  = true;
            $age  = 30;
            $edu  = "大专";
            $isMarried = false;
            $school = "北京科技大学";        // 定义了变量，但是没有赋值
            $salary = 2000;
            $bonus  = 500;
            
            // php当中的字符串连接，构建输出结果
            $str = "<h2>{$name}的基本信息如下</h2>";
            // 另外一种方式
            $str = "<h2>\"$name\"的基本信息如下: </h2>";
            $str .= "<br>性别: ".($sex ? '男' : '女');
            $str .= "<br>年龄: $age";
            $str .= "<br>学历: $edu";
            $str .= "<br>婚否: ".($isMarried ? "已婚" : "未婚");
            $str .= "<br>基本工资: $salary";
            $str .= "<br>奖金: $bonus";
            $str .= "<br>实发工资: ".($salary + $bonus);
            $str .= "<br>毕业学校: ".($school ? $school : "未填写");
            echo $str;
        ?>
    
    
    