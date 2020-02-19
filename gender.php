<?php

<input type="radio" name="gender"
 if (isset($gender) && $gender=="female") echo "checked";
value="female">Female
<input type="radio" name="gender"
if (isset($gender) && $gender=="male") echo "checked";
value="male">Male
<input type="radio" name="gender"
if (isset($gender) && $gender=="other") echo "checked";
value="other">Other

?>