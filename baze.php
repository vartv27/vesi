<?php

//2
           // http://www.ehau.ru/tablitsa-kaloriynosti-produktov-pitaniya
        $d= '
<table border="0px" style="border-color:#272727" id="enertab" cellpadding="0" cellspacing="0" width="467px">
          <tbody><tr>
            <th colspan="2" rowspan="2">Продукт</th>
            <th colspan="5">100 гр. продукта содержит</th>
          </tr>
          <tr>
            <th>вода, г</th>
            <th>белки, г</th>
            <th>жиры, г</th>
            <th>угл-ды, г</th>
            <th>Энерг. ценность, ккал</th>
          </tr>
          <tr>
            <th colspan="7">Овощи</th>
          </tr>
          <tr>
            <td colspan="2">Баклажаны</td>
            <td>91</td>
            <td>0,6</td>
            <td>0,1</td>
            <td>5,5</td>
            <td>24</td>
          </tr>
          <tr>
            <td colspan="2">Брюква</td>
            <td>87,5</td>
            <td>1,2</td>
            <td>0,1</td>
            <td>8,1</td>
            <td>37</td>
          </tr>
          <tr>
            <td colspan="2">Горошек зеленый</td>
            <td>80</td>
            <td>5</td>
            <td>0,2</td>
            <td>13,3</td>
            <td>72</td>
          </tr>
          <tr>
            <td colspan="2">Кабачки</td>
            <td>93</td>
            <td>0,6</td>
            <td>0,3</td>
            <td>5,7</td>
            <td>27</td>
          </tr>
          <tr>
            <td colspan="2">Капуста белокочанная</td>
            <td>90</td>
            <td>1,8</td>
            <td>-</td>
            <td>5,4</td>
            <td>28</td>
          </tr>
          <tr>
            <td colspan="2">Капуста краснокочанная</td>
            <td>90</td>
            <td>1,8</td>
            <td>-</td>
            <td>6,1</td>
            <td>31</td>
          </tr>
          <tr>
            <td colspan="2">Капуста цветная</td>
            <td>90,9</td>
            <td>2,5</td>
            <td>-</td>
            <td>4,9</td>
            <td>29</td>
          </tr>
          <tr>
            <td colspan="2">Картофель</td>
            <td>76</td>
            <td>2</td>
            <td>0,1</td>
            <td>19,7</td>
            <td>83</td>
          </tr>
          <tr>
            <td colspan="2">Лук зеленый (перо)</td>
            <td>92,5</td>
            <td>1,3</td>
            <td>-</td>
            <td>4,3</td>
            <td>22</td>
          </tr>
          <tr>
            <td colspan="2">Лук порей</td>
            <td>87</td>
            <td>3</td>
            <td>-</td>
            <td>7,3</td>
            <td>40</td>
          </tr>
          <tr>
            <td colspan="2">Лук репчатый</td>
            <td>86</td>
            <td>1,7</td>
            <td>-</td>
            <td>9,5</td>
            <td>43</td>
          </tr>
          <tr>
            <td colspan="2">Морковь красная</td>
            <td>88,5</td>
            <td>1,3</td>
            <td>0,1</td>
            <td>7</td>
            <td>33</td>
          </tr>
          <tr>
            <td colspan="2">Огурцы грунтовые</td>
            <td>95</td>
            <td>0,8</td>
            <td>-</td>
            <td>3</td>
            <td>15</td>
          </tr>
          <tr>
            <td colspan="2">Огурцы парниковые</td>
            <td>96,5</td>
            <td>0,7</td>
            <td>-</td>
            <td>1,8</td>
            <td>10</td>
          </tr>
          <tr>
            <td colspan="2">Перец зеленый сладкий</td>
            <td>92</td>
            <td>1,3</td>
            <td>-</td>
            <td>4,7</td>
            <td>23</td>
          </tr>
          <tr>
            <td colspan="2">Перец красный сладкий</td>
            <td>91</td>
            <td>1,3</td>
            <td>-</td>
            <td>5,7</td>
            <td>27</td>
          </tr>
          <tr>
            <td colspan="2">Петрушка (зелень)</td>
            <td>85</td>
            <td>3,7</td>
            <td>-</td>
            <td>8,1</td>
            <td>45</td>
          </tr>
          <tr>
            <td colspan="2">Петрушка (корень)</td>
            <td>85</td>
            <td>1,5</td>
            <td>-</td>
            <td>11</td>
            <td>47</td>
          </tr>
          <tr>
            <td colspan="2">Ревень (черешковый)</td>
            <td>94,5</td>
            <td>0,7</td>
            <td>-</td>
            <td>2,9</td>
            <td>16</td>
          </tr>
          <tr>
            <td colspan="2">Редис</td>
            <td>93</td>
            <td>1,2</td>
            <td>-</td>
            <td>4,1</td>
            <td>20</td>
          </tr>
          <tr>
            <td colspan="2">Редька</td>
            <td>88,6</td>
            <td>1,9</td>
            <td>-</td>
            <td>7</td>
            <td>34</td>
          </tr>
          <tr>
            <td colspan="2">Репа</td>
            <td>90,5</td>
            <td>1,5</td>
            <td>-</td>
            <td>5,9</td>
            <td>28</td>
          </tr>
          <tr>
            <td colspan="2">Салат</td>
            <td>95</td>
            <td>1,5</td>
            <td>-</td>
            <td>2,2</td>
            <td>14</td>
          </tr>
          <tr>
            <td colspan="2">Свекла</td>
            <td>86,5</td>
            <td>1,7</td>
            <td>-</td>
            <td>10,8</td>
            <td>48</td>
          </tr>
          <tr>
            <td colspan="2">Томаты (грунтовые)</td>
            <td>93,5</td>
            <td>0,6</td>
            <td>-</td>
            <td>4,2</td>
            <td>19</td>
          </tr>
          <tr>
            <td colspan="2">Томаты (парниковые)</td>
            <td>94,6</td>
            <td>0,6</td>
            <td>-</td>
            <td>2,9</td>
            <td>14</td>
          </tr>
          <tr>
            <td colspan="2">Зеленая фасоль (стручок)</td>
            <td>90</td>
            <td>4</td>
            <td>-</td>
            <td>4,3</td>
            <td>32</td>
          </tr>
          <tr>
            <td colspan="2">Хрен</td>
            <td>77</td>
            <td>2,5</td>
            <td>-</td>
            <td>16,3</td>
            <td>71</td>
          </tr>
          <tr>
            <td colspan="2">Черемша</td>
            <td>89</td>
            <td>2,4</td>
            <td>-</td>
            <td>6,5</td>
            <td>34</td>
          </tr>
          <tr>
            <td colspan="2">Чеснок</td>
            <td>70</td>
            <td>6,5</td>
            <td>-</td>
            <td>21,2</td>
            <td>106</td>
          </tr>
          <tr>
            <td colspan="2">Шпинат</td>
            <td>91,2</td>
            <td>2,9</td>
            <td>-</td>
            <td>2,3</td>
            <td>21</td>
          </tr>
          <tr>
            <td colspan="2">Щавель</td>
            <td>90</td>
            <td>1,5</td>
            <td>-</td>
            <td>5,3</td>
            <td>28</td>
          </tr>
          <tr>
            <th colspan="7">Орехи, семечки</th>
          </tr>
          <tr>
            <td colspan="2">Фундук</td>
            <td>4,8</td>
            <td>16,1</td>
            <td>66,9</td>
            <td>9,9</td>
            <td>704</td>
          </tr>
          <tr>
            <td colspan="2">Миндаль</td>
            <td>4</td>
            <td>18,6</td>
            <td>57,7</td>
            <td>13,6</td>
            <td>645</td>
          </tr>
          <tr>
            <td colspan="2">Грецкий орех</td>
            <td>5</td>
            <td>13,8</td>
            <td>61,3</td>
            <td>10,2</td>
            <td>648</td>
          </tr>
          <tr>
            <td colspan="2">Арахис</td>
            <td>10</td>
            <td>26,3</td>
            <td>45,2</td>
            <td>9,7</td>
            <td>548</td>
          </tr>
          <tr>
            <td colspan="2">Семя подсолнечника</td>
            <td>8</td>
            <td>20,7</td>
            <td>52,9</td>
            <td>5</td>
            <td>578</td>
          </tr>
          <tr>
            <th colspan="7">Фрукты, цитрусовые и ягоды</th>
          </tr>
          <tr>
            <td colspan="2">Абрикосы</td>
            <td>86</td>
            <td>0,9</td>
            <td>-</td>
            <td>10,5</td>
            <td>46</td>
          </tr>
          <tr>
            <td colspan="2">Айва</td>
            <td>87,5</td>
            <td>0,6</td>
            <td>-</td>
            <td>8,9</td>
            <td>38</td>
          </tr>
          <tr>
            <td colspan="2">Алыча</td>
            <td>89</td>
            <td>0,2</td>
            <td>-</td>
            <td>7,4</td>
            <td>34</td>
          </tr>
          <tr>
            <td colspan="2">Ананас</td>
            <td>86</td>
            <td>0,4</td>
            <td>-</td>
            <td>11,8</td>
            <td>48</td>
          </tr>
          <tr>
            <td colspan="2">Бананы</td>
            <td>74</td>
            <td>1,5</td>
            <td>-</td>
            <td>22,4</td>
            <td>91</td>
          </tr>
          <tr>
            <td colspan="2">Вишня</td>
            <td>85,5</td>
            <td>0,8</td>
            <td>-</td>
            <td>11,3</td>
            <td>49</td>
          </tr>
          <tr>
            <td colspan="2">Гранат</td>
            <td>85</td>
            <td>0,9</td>
            <td>-</td>
            <td>11,8</td>
            <td>52</td>
          </tr>
          <tr>
            <td colspan="2">Груша</td>
            <td>87,5</td>
            <td>0,4</td>
            <td>-</td>
            <td>10,7</td>
            <td>42</td>
          </tr>
          <tr>
            <td colspan="2">Инжир</td>
            <td>83</td>
            <td>0,7</td>
            <td>-</td>
            <td>13,9</td>
            <td>56</td>
          </tr>
          <tr>
            <td colspan="2">Кизил</td>
            <td>85</td>
            <td>1</td>
            <td>-</td>
            <td>9,7</td>
            <td>45</td>
          </tr>
          <tr>
            <td colspan="2">Персики</td>
            <td>86,5</td>
            <td>0,9</td>
            <td>-</td>
            <td>10,4</td>
            <td>44</td>
          </tr>
          <tr>
            <td colspan="2">Рябина садовая</td>
            <td>81</td>
            <td>1,4</td>
            <td>-</td>
            <td>12,5</td>
            <td>58</td>
          </tr>
          <tr>
            <td colspan="2">Рябина черноплодная</td>
            <td>80,5</td>
            <td>1,5</td>
            <td>-</td>
            <td>12</td>
            <td>54</td>
          </tr>
          <tr>
            <td colspan="2">Слива садовая</td>
            <td>87</td>
            <td>0,8</td>
            <td>-</td>
            <td>9,9</td>
            <td>43</td>
          </tr>
          <tr>
            <td colspan="2">Финики</td>
            <td>20</td>
            <td>2,5</td>
            <td>-</td>
            <td>72,1</td>
            <td>281</td>
          </tr>
          <tr>
            <td colspan="2">Хурма</td>
            <td>81,5</td>
            <td>0,5</td>
            <td>-</td>
            <td>15,9</td>
            <td>62</td>
          </tr>
          <tr>
            <td colspan="2">Черешня</td>
            <td>85</td>
            <td>1,1</td>
            <td>-</td>
            <td>12,3</td>
            <td>52</td>
          </tr>
          <tr>
            <td colspan="2">Шелковица</td>
            <td>82,7</td>
            <td>0,7</td>
            <td>-</td>
            <td>12,7</td>
            <td>53</td>
          </tr>
          <tr>
            <td colspan="2">Яблоки</td>
            <td>86,5</td>
            <td>0,4</td>
            <td>-</td>
            <td>11,3</td>
            <td>46</td>
          </tr>
          <tr>
            <td colspan="2">Апельсин</td>
            <td>87,5</td>
            <td>0,9</td>
            <td>-</td>
            <td>8,4</td>
            <td>38</td>
          </tr>
          <tr>
            <td colspan="2">Грейпфрут</td>
            <td>89</td>
            <td>0,9</td>
            <td>-</td>
            <td>7,3</td>
            <td>35</td>
          </tr>
          <tr>
            <td colspan="2">Лимон</td>
            <td>87,7</td>
            <td>0,9</td>
            <td>-</td>
            <td>3,6</td>
            <td>31</td>
          </tr>
          <tr>
            <td colspan="2">Мандарин</td>
            <td>88,5</td>
            <td>0,8</td>
            <td>-</td>
            <td>8,6</td>
            <td>38</td>
          </tr>
          <tr>
            <td colspan="2">Брусника</td>
            <td>87</td>
            <td>0,7</td>
            <td>-</td>
            <td>8,6</td>
            <td>40</td>
          </tr>
          <tr>
            <td colspan="2">Виноград</td>
            <td>80,2</td>
            <td>0,4</td>
            <td>-</td>
            <td>17,5</td>
            <td>69</td>
          </tr>
          <tr>
            <td colspan="2">Голубика</td>
            <td>88,2</td>
            <td>1</td>
            <td>-</td>
            <td>7,7</td>
            <td>37</td>
          </tr>
          <tr>
            <td colspan="2">Ежевика</td>
            <td>88</td>
            <td>2</td>
            <td>-</td>
            <td>5,3</td>
            <td>33</td>
          </tr>
          <tr>
            <td colspan="2">Земляника</td>
            <td>84,5</td>
            <td>1,8</td>
            <td>-</td>
            <td>8,1</td>
            <td>41</td>
          </tr>
          <tr>
            <td colspan="2">Клюква</td>
            <td>89,5</td>
            <td>0,5</td>
            <td>-</td>
            <td>4,8</td>
            <td>28</td>
          </tr>
          <tr>
            <td colspan="2">Крыжовник</td>
            <td>85</td>
            <td>0,7</td>
            <td>-</td>
            <td>9,9</td>
            <td>44</td>
          </tr>
          <tr>
            <td colspan="2">Малина</td>
            <td>87</td>
            <td>0,8</td>
            <td>-</td>
            <td>9</td>
            <td>41</td>
          </tr>
          <tr>
            <td colspan="2">Морошка</td>
            <td>83,3</td>
            <td>0,8</td>
            <td>-</td>
            <td>6,8</td>
            <td>31</td>
          </tr>
          <tr>
            <td colspan="2">Облепиха</td>
            <td>75</td>
            <td>0,9</td>
            <td>-</td>
            <td>5,5</td>
            <td>30</td>
          </tr>
          <tr>
            <td colspan="2">Смородина белая</td>
            <td>86</td>
            <td>0,3</td>
            <td>-</td>
            <td>8,7</td>
            <td>39</td>
          </tr>
          <tr>
            <td colspan="2">Смородина красная</td>
            <td>85,4</td>
            <td>0,6</td>
            <td>-</td>
            <td>8</td>
            <td>38</td>
          </tr>
          <tr>
            <td colspan="2">Смородина черная</td>
            <td>85</td>
            <td>1</td>
            <td>-</td>
            <td>8</td>
            <td>40</td>
          </tr>
          <tr>
            <td colspan="2">Черника</td>
            <td>86,5</td>
            <td>1,1</td>
            <td>-</td>
            <td>8,6</td>
            <td>40</td>
          </tr>
          <tr>
            <td colspan="2">Шиповник свежий</td>
            <td>66</td>
            <td>1,6</td>
            <td>-</td>
            <td>24</td>
            <td>101</td>
          </tr>
          <tr>
            <td colspan="2">Шиповник сушеный</td>
            <td>14</td>
            <td>4</td>
            <td>-</td>
            <td>60</td>
            <td>253</td>
          </tr>
          <tr>
            <th colspan="7">Бахчевые культуры</th>
          </tr>
          <tr>
            <td colspan="2">Арбуз</td>
            <td>89,5</td>
            <td>0,7</td>
            <td>-</td>
            <td>9,2</td>
            <td>38</td>
          </tr>
          <tr>
            <td colspan="2">Дыня</td>
            <td>88,5</td>
            <td>0,6</td>
            <td>-</td>
            <td>9,6</td>
            <td>39</td>
          </tr>
          <tr>
            <td colspan="2">Тыква</td>
            <td>90,3</td>
            <td>1</td>
            <td>-</td>
            <td>6,5</td>
            <td>29</td>
          </tr>
          <tr>
            <th colspan="7">Грибы</th>
          </tr>
          <tr>
            <td colspan="2">Белые свежие</td>
            <td>89,9</td>
            <td>3,2</td>
            <td>0,7</td>
            <td>1,6</td>
            <td>25</td>
          </tr>
          <tr>
            <td colspan="2">Белые сушеные</td>
            <td>13</td>
            <td>27,6</td>
            <td>6,8</td>
            <td>10</td>
            <td>209</td>
          </tr>
          <tr>
            <td colspan="2">Подберезовики свежие</td>
            <td>91,6</td>
            <td>2,3</td>
            <td>0,9</td>
            <td>3,7</td>
            <td>31</td>
          </tr>
          <tr>
            <td colspan="2">Подосиновики  свежие</td>
            <td>91,1</td>
            <td>3,3</td>
            <td>0,5</td>
            <td>3,4</td>
            <td>31</td>
          </tr>
          <tr>
            <td colspan="2">Сыроежи свежие</td>
            <td>83</td>
            <td>1,7</td>
            <td>0,3</td>
            <td>1,4</td>
            <td>17</td>
          </tr>
          <tr>
            <th colspan="7">Квашеные, соленые,  сушеные овощи и фрукты</th>
          </tr>
          <tr>
            <td colspan="2">Капуста квашеная</td>
            <td>90,9</td>
            <td>0,8</td>
            <td>-</td>
            <td>1,8</td>
            <td>14</td>
          </tr>
          <tr>
            <td colspan="2">Огурцы соленые</td>
            <td>93,8</td>
            <td>2,8</td>
            <td>-</td>
            <td>1,3</td>
            <td>19</td>
          </tr>
          <tr>
            <td colspan="2">Томаты соленые</td>
            <td>92,8</td>
            <td>1,7</td>
            <td>-</td>
            <td>1,8</td>
            <td>19</td>
          </tr>
          <tr>
            <th colspan="7">Сушеные овощи</th>
          </tr>
          <tr>
            <td colspan="2">Горошек</td>
            <td>13,1</td>
            <td>35</td>
            <td>0,4</td>
            <td>47,5</td>
            <td>322</td>
          </tr>
          <tr>
            <td colspan="2">Картофель</td>
            <td>12</td>
            <td>6,6</td>
            <td>0,3</td>
            <td>73,7</td>
            <td>307</td>
          </tr>
          <tr>
            <td colspan="2">Лук репчатый</td>
            <td>14</td>
            <td>16</td>
            <td>2,8</td>
            <td>47,8</td>
            <td>273</td>
          </tr>
          <tr>
            <td colspan="2">Морковь</td>
            <td>14</td>
            <td>13</td>
            <td>1,5</td>
            <td>54,6</td>
            <td>275</td>
          </tr>
          <tr>
            <td colspan="2">Свекла</td>
            <td>14</td>
            <td>13,5</td>
            <td>-</td>
            <td>59,6</td>
            <td>278</td>
          </tr>
          <tr>
            <th colspan="7">Фрукты сушеные</th>
          </tr>
          <tr>
            <td colspan="2">Урюк</td>
            <td>18</td>
            <td>5</td>
            <td>-</td>
            <td>67,5</td>
            <td>278</td>
          </tr>
          <tr>
            <td colspan="2">Курага</td>
            <td>20,2</td>
            <td>5,2</td>
            <td>-</td>
            <td>65,9</td>
            <td>272</td>
          </tr>
          <tr>
            <td colspan="2">Изюм с косточкой</td>
            <td>19</td>
            <td>1,8</td>
            <td>-</td>
            <td>70,9</td>
            <td>276</td>
          </tr>
          <tr>
            <td colspan="2">Изюм кишмиш</td>
            <td>18</td>
            <td>2,3</td>
            <td>-</td>
            <td>71,2</td>
            <td>279</td>
          </tr>
          <tr>
            <td colspan="2">Вишня</td>
            <td>18</td>
            <td>1,5</td>
            <td>-</td>
            <td>73</td>
            <td>292</td>
          </tr>
          <tr>
            <td colspan="2">Груша</td>
            <td>24</td>
            <td>2,3</td>
            <td>-</td>
            <td>62,1</td>
            <td>246</td>
          </tr>
          <tr>
            <td colspan="2">Персики</td>
            <td>18</td>
            <td>3</td>
            <td>-</td>
            <td>68,5</td>
            <td>275</td>
          </tr>
          <tr>
            <td colspan="2">Чернослив</td>
            <td>25</td>
            <td>2,3</td>
            <td>-</td>
            <td>65,6</td>
            <td>264</td>
          </tr>
          <tr>
            <td colspan="2">Яблоки</td>
            <td>20</td>
            <td>3,2</td>
            <td>-</td>
            <td>68</td>
            <td>273</td>
          </tr>
          <tr>
            <th colspan="7">Хлебобулочные изделия</th>
          </tr>
          <tr>
            <td colspan="2">Хлеб ржаной</td>
            <td>42,4</td>
            <td>4,7</td>
            <td>0,7</td>
            <td>49,8</td>
            <td>214</td>
          </tr>
          <tr>
            <td colspan="2">Хлеб пшеничный из муки I сорта</td>
            <td>34,3</td>
            <td>7,7</td>
            <td>2,4</td>
            <td>53,4</td>
            <td>254</td>
          </tr>
          <tr>
            <td colspan="2">Сдобная выпечка</td>
            <td>26,1</td>
            <td>7,6</td>
            <td>4,5</td>
            <td>60</td>
            <td>297</td>
          </tr>
          <tr>
            <td colspan="2">Баранки</td>
            <td>17</td>
            <td>10,4</td>
            <td>1,3</td>
            <td>68,7</td>
            <td>312</td>
          </tr>
          <tr>
            <td colspan="2">Сушки</td>
            <td>12</td>
            <td>11</td>
            <td>1,3</td>
            <td>73</td>
            <td>330</td>
          </tr>
          <tr>
            <td colspan="2">Сухари пшеничные</td>
            <td>12</td>
            <td>11,2</td>
            <td>1,4</td>
            <td>72,4</td>
            <td>331</td>
          </tr>
          <tr>
            <td colspan="2">Сухари сливочные</td>
            <td>8</td>
            <td>8,5</td>
            <td>10,6</td>
            <td>71,3</td>
            <td>397</td>
          </tr>
          <tr>
            <td colspan="2">Мука пшеничная высшего сорта</td>
            <td>14</td>
            <td>10,3</td>
            <td>0,9</td>
            <td>74,2</td>
            <td>327</td>
          </tr>
          <tr>
            <td colspan="2">Мука пшенич. I сорта</td>
            <td>14</td>
            <td>10,6</td>
            <td>1,3</td>
            <td>73,2</td>
            <td>329</td>
          </tr>
          <tr>
            <td colspan="2">Мука пшенич. II сорта</td>
            <td>14</td>
            <td>11,7</td>
            <td>1,8</td>
            <td>70,8</td>
            <td>328</td>
          </tr>
          <tr>
            <td colspan="2">Мука ржаная</td>
            <td>14</td>
            <td>6,9</td>
            <td>1,1</td>
            <td>76,9</td>
            <td>326</td>
          </tr>
          <tr>
            <th colspan="7">Крупа</th>
          </tr>
          <tr>
            <td colspan="2">Гречневая ядрица</td>
            <td>14</td>
            <td>12,6</td>
            <td>2,6</td>
            <td>68</td>
            <td>329</td>
          </tr>
          <tr>
            <td colspan="2">Гречневая продел</td>
            <td>14</td>
            <td>9,5</td>
            <td>1,9</td>
            <td>72,2</td>
            <td>326</td>
          </tr>
          <tr>
            <td colspan="2">Манная</td>
            <td>14</td>
            <td>11,3</td>
            <td>0,7</td>
            <td>73,3</td>
            <td>326</td>
          </tr>
          <tr>
            <td colspan="2">Овсяная</td>
            <td>12</td>
            <td>11,9</td>
            <td>5,8</td>
            <td>65,4</td>
            <td>345</td>
          </tr>
          <tr>
            <td colspan="2">Перловая</td>
            <td>14</td>
            <td>9,3</td>
            <td>1,1</td>
            <td>73,7</td>
            <td>324</td>
          </tr>
          <tr>
            <td colspan="2">Пшено</td>
            <td>14</td>
            <td>12</td>
            <td>2,9</td>
            <td>69,3</td>
            <td>334</td>
          </tr>
          <tr>
            <td colspan="2">Рисовая</td>
            <td>14</td>
            <td>7</td>
            <td>0,6</td>
            <td>73,7</td>
            <td>323</td>
          </tr>
          <tr>
            <td colspan="2">Пшенич."Полтавская"</td>
            <td>14</td>
            <td>12,7</td>
            <td>1,1</td>
            <td>70,6</td>
            <td>325</td>
          </tr>
          <tr>
            <td colspan="2">Толокно</td>
            <td>10</td>
            <td>12,2</td>
            <td>5,8</td>
            <td>68,3</td>
            <td>357</td>
          </tr>
          <tr>
            <td colspan="2">Ячневая</td>
            <td>14</td>
            <td>10,4</td>
            <td>1,3</td>
            <td>71,7</td>
            <td>322</td>
          </tr>
          <tr>
            <td colspan="2">Геркулес</td>
            <td>12</td>
            <td>13,1</td>
            <td>6,2</td>
            <td>65,7</td>
            <td>355</td>
          </tr>
          <tr>
            <td colspan="2">Кукурузная</td>
            <td>14</td>
            <td>8,3</td>
            <td>1,2</td>
            <td>75</td>
            <td>325</td>
          </tr>
          <tr>
            <th colspan="7">Зернобобовые</th>
          </tr>
          <tr>
            <td colspan="2">Бобы</td>
            <td>83</td>
            <td>6</td>
            <td>0,1</td>
            <td>8,3</td>
            <td>58</td>
          </tr>
          <tr>
            <td colspan="2">Горох лущеный</td>
            <td>14</td>
            <td>23</td>
            <td>1,6</td>
            <td>57,7</td>
            <td>323</td>
          </tr>
          <tr>
            <td colspan="2">Горох цельный</td>
            <td>14</td>
            <td>23</td>
            <td>1,2</td>
            <td>53,3</td>
            <td>303</td>
          </tr>
          <tr>
            <td colspan="2">Соя</td>
            <td>12</td>
            <td>34,9</td>
            <td>17,3</td>
            <td>26,5</td>
            <td>395</td>
          </tr>
          <tr>
            <td colspan="2">Фасоль</td>
            <td>14</td>
            <td>22,3</td>
            <td>1,7</td>
            <td>54,5</td>
            <td>309</td>
          </tr>
          <tr>
            <td colspan="2">Чечевица</td>
            <td>14</td>
            <td>24,8</td>
            <td>1,1</td>
            <td>53,7</td>
            <td>310</td>
          </tr>
          <tr>
            <th colspan="7">Молочные продукты</th>
          </tr>
          <tr>
            <td colspan="2">Брынза из коровьего молока</td>
            <td>52</td>
            <td>17,9</td>
            <td>20,1</td>
            <td>0</td>
            <td>260</td>
          </tr>
          <tr>
            <td colspan="2">Йогурт натуральный 1.5% жирности</td>
            <td>88</td>
            <td>5</td>
            <td>1,5</td>
            <td>3,5</td>
            <td>51</td>
          </tr>
          <tr>
            <td colspan="2">Кефир нежирный</td>
            <td>91,4</td>
            <td>3</td>
            <td>0,1</td>
            <td>3,8</td>
            <td>30</td>
          </tr>
          <tr>
            <td colspan="2">Кефир жирный</td>
            <td>88,3</td>
            <td>2,8</td>
            <td>3,2</td>
            <td>4,1</td>
            <td>59</td>
          </tr>
          <tr>
            <td colspan="2">Молоко</td>
            <td>88,5</td>
            <td>2,8</td>
            <td>3,2</td>
            <td>4,7</td>
            <td>58</td>
          </tr>
          <tr>
            <td colspan="2">Молоко ацидофильное</td>
            <td>81,7</td>
            <td>2,8</td>
            <td>3,2</td>
            <td>10,8</td>
            <td>83</td>
          </tr>
          <tr>
            <td colspan="2">Молоко сухое цельное</td>
            <td>4</td>
            <td>25,6</td>
            <td>25</td>
            <td>39,4</td>
            <td>475</td>
          </tr>
          <tr>
            <td colspan="2">Молоко сгущенное</td>
            <td>74,1</td>
            <td>7</td>
            <td>7,9</td>
            <td>9,5</td>
            <td>135</td>
          </tr>
          <tr>
            <td colspan="2">Молоко сгущенное с сахаром</td>
            <td>26,5</td>
            <td>7,2</td>
            <td>8,5</td>
            <td>56</td>
            <td>315</td>
          </tr>
          <tr>
            <td colspan="2">Простокваша</td>
            <td>88,4</td>
            <td>2,8</td>
            <td>3,2</td>
            <td>4,1</td>
            <td>58</td>
          </tr>
          <tr>
            <td colspan="2">Ряженка</td>
            <td>85,3</td>
            <td>3</td>
            <td>6</td>
            <td>4,1</td>
            <td>85</td>
          </tr>
          <tr>
            <td colspan="2">Сливки 10%</td>
            <td>82,2</td>
            <td>3</td>
            <td>10</td>
            <td>4</td>
            <td>118</td>
          </tr>
          <tr>
            <td colspan="2">Сливки 20%</td>
            <td>72,9</td>
            <td>2,8</td>
            <td>20</td>
            <td>3,6</td>
            <td>205</td>
          </tr>
          <tr>
            <td colspan="2">Сметана 10%</td>
            <td>82,7</td>
            <td>3</td>
            <td>10</td>
            <td>2,9</td>
            <td>116</td>
          </tr>
          <tr>
            <td colspan="2">Сметана 20%</td>
            <td>72,7</td>
            <td>2,8</td>
            <td>20</td>
            <td>3,2</td>
            <td>206</td>
          </tr>
          <tr>
            <td colspan="2">Сырки и масса творожные особые</td>
            <td>41</td>
            <td>7,1</td>
            <td>23</td>
            <td>27,5</td>
            <td>340</td>
          </tr>
          <tr>
            <td colspan="2">Сыр российский</td>
            <td>40</td>
            <td>23,4</td>
            <td>30</td>
            <td>0</td>
            <td>371</td>
          </tr>
          <tr>
            <td colspan="2">Сыр голландский</td>
            <td>38,8</td>
            <td>26,8</td>
            <td>27,3</td>
            <td>0</td>
            <td>361</td>
          </tr>
          <tr>
            <td colspan="2">Сыр швейцарский</td>
            <td>36,4</td>
            <td>24,9</td>
            <td>31,8</td>
            <td>0</td>
            <td>396</td>
          </tr>
          <tr>
            <td colspan="2">Сыр пошехонский</td>
            <td>41</td>
            <td>26</td>
            <td>26,5</td>
            <td>0</td>
            <td>334</td>
          </tr>
          <tr>
            <td colspan="2">Сыр плавленный</td>
            <td>55</td>
            <td>24</td>
            <td>13,5</td>
            <td>0</td>
            <td>226</td>
          </tr>
          <tr>
            <td colspan="2">Творог жирный</td>
            <td>64,7</td>
            <td>14</td>
            <td>18</td>
            <td>1,3</td>
            <td>226</td>
          </tr>
          <tr>
            <td colspan="2">Творог полужирный</td>
            <td>71</td>
            <td>16,7</td>
            <td>9</td>
            <td>1,3</td>
            <td>156</td>
          </tr>
          <tr>
            <td colspan="2">Творог нежирный</td>
            <td>77,7</td>
            <td>18</td>
            <td>0,6</td>
            <td>1,5</td>
            <td>86</td>
          </tr>
          <tr>
            <th colspan="7">Мясные продукты</th>
          </tr>
          <tr>
            <td colspan="2">Баранина</td>
            <td>67,6</td>
            <td>16,3</td>
            <td>15,3</td>
            <td>0</td>
            <td>203</td>
          </tr>
          <tr>
            <td colspan="2">Говядина</td>
            <td>67,7</td>
            <td>18,9</td>
            <td>12,4</td>
            <td>0</td>
            <td>187</td>
          </tr>
          <tr>
            <td colspan="2">Конина</td>
            <td>72,5</td>
            <td>20,2</td>
            <td>7</td>
            <td>0</td>
            <td>143</td>
          </tr>
          <tr>
            <td colspan="2">Кролик</td>
            <td>65,3</td>
            <td>20,7</td>
            <td>12,9</td>
            <td>0</td>
            <td>199</td>
          </tr>
          <tr>
            <td colspan="2">Свинина нежирная</td>
            <td>54,8</td>
            <td>16,4</td>
            <td>27,8</td>
            <td>0</td>
            <td>316</td>
          </tr>
          <tr>
            <td colspan="2">Свинина жирная</td>
            <td>38,7</td>
            <td>11,4</td>
            <td>49,3</td>
            <td>0</td>
            <td>489</td>
          </tr>
          <tr>
            <td colspan="2">Телятина</td>
            <td>78</td>
            <td>19,7</td>
            <td>1,2</td>
            <td>0</td>
            <td>90</td>
          </tr>
          <tr>
            <th colspan="7">Субпродукты бараньи</th>
          </tr>
          <tr>
            <td colspan="2">Печень</td>
            <td>71,2</td>
            <td>18,7</td>
            <td>2,9</td>
            <td>0</td>
            <td>101</td>
          </tr>
          <tr>
            <td colspan="2">Почки</td>
            <td>79,7</td>
            <td>13,6</td>
            <td>2,5</td>
            <td>0</td>
            <td>77</td>
          </tr>

          <tr>
            <td colspan="2">Сердце</td>
            <td>78,5</td>
            <td>13,5</td>
            <td>2,5</td>
            <td>0</td>
            <td>82</td>
          </tr>
          <tr>
            <th colspan="7">Субпродукты говяжьи</th>
          </tr>
          <tr>
            <td colspan="2">Вымя</td>
            <td>72,6</td>
            <td>12,3</td>
            <td>13,7</td>
            <td>0</td>
            <td>173</td>
          </tr>
          <tr>
            <td colspan="2">Мозги</td>
            <td>78,9</td>
            <td>9,5</td>
            <td>9,5</td>
            <td>0</td>
            <td>124</td>
          </tr>
          <tr>
            <td colspan="2">Печень</td>
            <td>72,9</td>
            <td>17,4</td>
            <td>3,1</td>
            <td>0</td>
            <td>98</td>
          </tr>
          <tr>
            <td colspan="2">Почки</td>
            <td>82,7</td>
            <td>12,5</td>
            <td>1,8</td>
            <td>0</td>
            <td>66</td>
          </tr>
          <tr>
            <td colspan="2">Сердце</td>
            <td>79</td>
            <td>15</td>
            <td>3</td>
            <td>0</td>
            <td>87</td>
          </tr>
          <tr>
            <td colspan="2">Язык</td>
            <td>71,2</td>
            <td>13,6</td>
            <td>12,1</td>
            <td>0</td>
            <td>163</td>
          </tr>
          <tr>
            <th colspan="7">Субпродукты свиные</th>
          </tr>
          <tr>
            <td colspan="2">Печень</td>
            <td>71,4</td>
            <td>18,8</td>
            <td>3,6</td>
            <td>0</td>
            <td>108</td>
          </tr>
          <tr>
            <td colspan="2">Почки</td>
            <td>80,1</td>
            <td>13</td>
            <td>3,1</td>
            <td>0</td>
            <td>80</td>
          </tr>
          <tr>
            <td colspan="2">Сердце</td>
            <td>78</td>
            <td>15,1</td>
            <td>3,2</td>
            <td>0</td>
            <td>89</td>
          </tr>
          <tr>
            <td colspan="2">Язык</td>
            <td>66,1</td>
            <td>14,2</td>
            <td>16,8</td>
            <td>0</td>
            <td>208</td>
          </tr>
          <tr>
            <th colspan="7">Птица домашняя</th>
          </tr>
          <tr>
            <td colspan="2">Цыплята</td>
            <td>71,3</td>
            <td>18,7</td>
            <td>7,8</td>
            <td>0,4</td>
            <td>156</td>
          </tr>
          <tr>
            <td colspan="2">Гуси</td>
            <td>49,7</td>
            <td>16,1</td>
            <td>33,3</td>
            <td>0</td>
            <td>364</td>
          </tr>
          <tr>
            <td colspan="2">Индейка</td>
            <td>64,5</td>
            <td>21,6</td>
            <td>12</td>
            <td>0,8</td>
            <td>197</td>
          </tr>
          <tr>
            <td colspan="2">Куры</td>
            <td>68,9</td>
            <td>20,8</td>
            <td>8,8</td>
            <td>0,6</td>
            <td>165</td>
          </tr>
          <tr>
            <td colspan="2">Утки</td>
            <td>51,5</td>
            <td>16,5</td>
            <td>61,2</td>
            <td>0</td>
            <td>346</td>
          </tr>
          <tr>
            <th colspan="7">Колбасные изделия</th>
          </tr>
          <tr>
            <td colspan="7">Вареные колбасы</td>
          </tr>
          <tr>
            <td colspan="2">Диабетическая</td>
            <td>62,4</td>
            <td>12,1</td>
            <td>22,8</td>
            <td>0</td>
            <td>254</td>
          </tr>
          <tr>
            <td colspan="2">Диетическая</td>
            <td>71,6</td>
            <td>12,1</td>
            <td>13,5</td>
            <td>0</td>
            <td>170</td>
          </tr>
          <tr>
            <td colspan="2">Докторская</td>
            <td>60,8</td>
            <td>13,7</td>
            <td>22,8</td>
            <td>0</td>
            <td>260</td>
          </tr>
          <tr>
            <td colspan="2">Любительская</td>
            <td>57</td>
            <td>12,2</td>
            <td>28</td>
            <td>0</td>
            <td>301</td>
          </tr>
          <tr>
            <td colspan="2">Молочная</td>
            <td>62,8</td>
            <td>11,7</td>
            <td>22,8</td>
            <td>0</td>
            <td>252</td>
          </tr>
          <tr>
            <td colspan="2">Отдельная</td>
            <td>64,8</td>
            <td>10,1</td>
            <td>20,1</td>
            <td>1,8</td>
            <td>228</td>
          </tr>
          <tr>
            <td colspan="2">Телячья</td>
            <td>55</td>
            <td>12,5</td>
            <td>29,6</td>
            <td>0</td>
            <td>316</td>
          </tr>
          <tr>
            <th colspan="7">Сардельки</th>
          </tr>
          <tr>
            <td colspan="2">Свиные</td>
            <td>53,7</td>
            <td>10,1</td>
            <td>31,6</td>
            <td>1,9</td>
            <td>332</td>
          </tr>
          <tr>
            <th colspan="7">Сосиски</th>
          </tr>
          <tr>
            <td colspan="2">Молочные</td>
            <td>60</td>
            <td>12,3</td>
            <td>25,3</td>
            <td>0</td>
            <td>277</td>
          </tr>
          <tr>
            <td colspan="2">Русские</td>
            <td>66,2</td>
            <td>12</td>
            <td>19,1</td>
            <td>0</td>
            <td>220</td>
          </tr>
          <tr>
            <td colspan="2">Свиные</td>
            <td>54,8</td>
            <td>11,8</td>
            <td>30,8</td>
            <td>0</td>
            <td>324</td>
          </tr>
          <tr>
            <th colspan="7">Варено-копченые колбасы</th>
          </tr>
          <tr>
            <td colspan="2">Любительская</td>
            <td>39,1</td>
            <td>17,3</td>
            <td>39</td>
            <td>0</td>
            <td>420</td>
          </tr>
          <tr>
            <td colspan="2">Сервелат</td>
            <td>39,6</td>
            <td>28,2</td>
            <td>27,5</td>
            <td>0</td>
            <td>360</td>
          </tr>
          <tr>
            <th colspan="7">Полукопченые колбасы</th>
          </tr>
          <tr>
            <td colspan="2">Краковская</td>
            <td>34,6</td>
            <td>16,2</td>
            <td>44,6</td>
            <td>0</td>
            <td>466</td>
          </tr>
          <tr>
            <td colspan="2">Минская</td>
            <td>52</td>
            <td>23</td>
            <td>17,4</td>
            <td>2,7</td>
            <td>259</td>
          </tr>
          <tr>
            <td colspan="2">Полтавская</td>
            <td>39,8</td>
            <td>16,4</td>
            <td>39</td>
            <td>0</td>
            <td>417</td>
          </tr>
          <tr>
            <td colspan="2">Украинская</td>
            <td>44,4</td>
            <td>16,5</td>
            <td>34,4</td>
            <td>0</td>
            <td>376</td>
          </tr>
          <tr>
            <th colspan="7">Сырокопченые колбасы</th>
          </tr>
          <tr>
            <td colspan="2">Любительская</td>
            <td>25,2</td>
            <td>20,9</td>
            <td>47,8</td>
            <td>0</td>
            <td>514</td>
          </tr>
          <tr>
            <td colspan="2">Московская</td>
            <td>27,6</td>
            <td>24,8</td>
            <td>41,5</td>
            <td>0</td>
            <td>473</td>
          </tr>
          <tr>
            <th colspan="7">Свинина, готовая к употреблению</th>
          </tr>
          <tr>
            <td colspan="2">Грудинка сырокопченая</td>
            <td>21</td>
            <td>7,6</td>
            <td>66,8</td>
            <td>0</td>
            <td>632</td>
          </tr>
          <tr>
            <td colspan="2">Корейка сырокопченая</td>
            <td>37,3</td>
            <td>10,5</td>
            <td>47,2</td>
            <td>0</td>
            <td>467</td>
          </tr>
          <tr>
            <td colspan="2">Ветчина</td>
            <td>53,5</td>
            <td>22,6</td>
            <td>20,9</td>
            <td>0</td>
            <td>279</td>
          </tr>
          <tr>
            <th colspan="7">Мясные консервы</th>
          </tr>
          <tr>
            <td colspan="2">Говядина тушеная</td>
            <td>63</td>
            <td>16,8</td>
            <td>18,3</td>
            <td>0</td>
            <td>232</td>
          </tr>
          <tr>
            <td colspan="2">Завтрак туриста (говядина)</td>
            <td>66,9</td>
            <td>20,5</td>
            <td>10,4</td>
            <td>0</td>
            <td>176</td>
          </tr>
          <tr>
            <td colspan="2">Завтрак туриста (свинина)</td>
            <td>65,6</td>
            <td>16,9</td>
            <td>15,4</td>
            <td>0</td>
            <td>206</td>
          </tr>
          <tr>
            <td colspan="2">Колбасный фарш</td>
            <td>63,2</td>
            <td>15,2</td>
            <td>15,7</td>
            <td>2,8</td>
            <td>213</td>
          </tr>
          <tr>
            <td colspan="2">Свинина тушеная</td>
            <td>51,1</td>
            <td>14,9</td>
            <td>32,2</td>
            <td>0</td>
            <td>349</td>
          </tr>
          <tr>
            <th colspan="7">Яйцо и яйцепродукты</th>
          </tr>
          <tr>
            <td colspan="2">Яйцо куриное</td>
            <td>74</td>
            <td>12,7</td>
            <td>11,5</td>
            <td>0,7</td>
            <td>157</td>
          </tr>
          <tr>
            <td colspan="2">Яичный порошок</td>
            <td>6,8</td>
            <td>45</td>
            <td>37,3</td>
            <td>7,1</td>
            <td>542</td>
          </tr>
          <tr>
            <td colspan="2">Сухой белок</td>
            <td>12,1</td>
            <td>73,3</td>
            <td>1,8</td>
            <td>7</td>
            <td>336</td>
          </tr>
          <tr>
            <td colspan="2">Сухой желток</td>
            <td>5,4</td>
            <td>34,2</td>
            <td>52,2</td>
            <td>4,4</td>
            <td>623</td>
          </tr>
          <tr>
            <td colspan="2">Яйцо перепелиное</td>
            <td>73,3</td>
            <td>11,9</td>
            <td>13,1</td>
            <td>0,6</td>
            <td>168</td>
          </tr>
          <tr>
            <th colspan="7">Рыба мороженая  и свежая</th>
          </tr>
          <tr>
            <td colspan="2">Горбуша</td>
            <td>70,5</td>
            <td>21</td>
            <td>7</td>
            <td>0</td>
            <td>147</td>
          </tr>
          <tr>
            <td colspan="2">Камбала</td>
            <td>79,5</td>
            <td>16,1</td>
            <td>2,6</td>
            <td>0</td>
            <td>88</td>
          </tr>
          <tr>
            <td colspan="2">Карась</td>
            <td>78,9</td>
            <td>17,7</td>
            <td>1,8</td>
            <td>0</td>
            <td>87</td>
          </tr>
          <tr>
            <td colspan="2">Карп</td>
            <td>79,1</td>
            <td>16</td>
            <td>3,6</td>
            <td>0</td>
            <td>96</td>
          </tr>
          <tr>
            <td colspan="2">Кета</td>
            <td>71,3</td>
            <td>22</td>
            <td>5,6</td>
            <td>0</td>
            <td>138</td>
          </tr>
          <tr>
            <td colspan="2">Корюшка</td>
            <td>79,8</td>
            <td>15,5</td>
            <td>3,2</td>
            <td>0</td>
            <td>91</td>
          </tr>
          <tr>
            <td colspan="2">Ледяная</td>
            <td>81,8</td>
            <td>15,5</td>
            <td>1,4</td>
            <td>0</td>
            <td>75</td>
          </tr>
          <tr>
            <td colspan="2">Лещ</td>
            <td>77,7</td>
            <td>17,1</td>
            <td>4,1</td>
            <td>0</td>
            <td>105</td>
          </tr>
          <tr>
            <td colspan="2">Семга</td>
            <td>62,9</td>
            <td>20,8</td>
            <td>15,1</td>
            <td>0</td>
            <td>219</td>
          </tr>
          <tr>
            <td colspan="2">Макрурус</td>
            <td>85</td>
            <td>13,2</td>
            <td>0,8</td>
            <td>0</td>
            <td>60</td>
          </tr>
          <tr>
            <td colspan="2">Минога</td>
            <td>75</td>
            <td>14,7</td>
            <td>11,9</td>
            <td>0</td>
            <td>166</td>
          </tr>
          <tr>
            <td colspan="2">Минтай</td>
            <td>80,1</td>
            <td>15,9</td>
            <td>0,7</td>
            <td>0</td>
            <td>70</td>
          </tr>
          <tr>
            <td colspan="2">Мойва</td>
            <td>75</td>
            <td>13,4</td>
            <td>11,5</td>
            <td>0</td>
            <td>157</td>
          </tr>
          <tr>
            <td colspan="2">Навага</td>
            <td>81,1</td>
            <td>16,1</td>
            <td>1</td>
            <td>0</td>
            <td>73</td>
          </tr>
          <tr>
            <td colspan="2">Налим</td>
            <td>79,3</td>
            <td>18,8</td>
            <td>0,6</td>
            <td>0</td>
            <td>81</td>
          </tr>
          <tr>
            <td colspan="2">Нототения мраморная</td>
            <td>73,4</td>
            <td>14,8</td>
            <td>10,7</td>
            <td>0</td>
            <td>156</td>
          </tr>
          <tr>
            <td colspan="2">Окунь морской</td>
            <td>75,4</td>
            <td>17,6</td>
            <td>5,2</td>
            <td>0</td>
            <td>117</td>
          </tr>
          <tr>
            <td colspan="2">Окунь речной</td>
            <td>79,2</td>
            <td>18,5</td>
            <td>0,9</td>
            <td>0</td>
            <td>82</td>
          </tr>
          <tr>
            <td colspan="2">Осетр</td>
            <td>71,4</td>
            <td>16,4</td>
            <td>10,9</td>
            <td>0</td>
            <td>164</td>
          </tr>
          <tr>
            <td colspan="2">Палтус</td>
            <td>76,9</td>
            <td>18,9</td>
            <td>3</td>
            <td>0</td>
            <td>103</td>
          </tr>
          <tr>
            <td colspan="2">Путассу</td>
            <td>81,3</td>
            <td>16,1</td>
            <td>0,9</td>
            <td>0</td>
            <td>72</td>
          </tr>
          <tr>
            <td colspan="2">Рыба-сабля</td>
            <td>75,2</td>
            <td>20,3</td>
            <td>3,2</td>
            <td>0</td>
            <td>110</td>
          </tr>
          <tr>
            <td colspan="2">Рыбец каспийский</td>
            <td>77</td>
            <td>19,2</td>
            <td>2,4</td>
            <td>0</td>
            <td>98</td>
          </tr>
          <tr>
            <td colspan="2">Сазан</td>
            <td>75,3</td>
            <td>18,4</td>
            <td>5,3</td>
            <td>0</td>
            <td>121</td>
          </tr>
          <tr>
            <td colspan="2">Сайра крупная</td>
            <td>59,8</td>
            <td>18,6</td>
            <td>20,8</td>
            <td>0</td>
            <td>262</td>
          </tr>
          <tr>
            <td colspan="2">Сайра мелкая</td>
            <td>71,3</td>
            <td>20,4</td>
            <td>0,8</td>
            <td>0</td>
            <td>143</td>
          </tr>
          <tr>
            <td colspan="2">Салака</td>
            <td>75,4</td>
            <td>17,3</td>
            <td>5,6</td>
            <td>0</td>
            <td>121</td>
          </tr>
          <tr>
            <td colspan="2">Сельдь</td>
            <td>62,7</td>
            <td>17,7</td>
            <td>19,5</td>
            <td>0</td>
            <td>242</td>
          </tr>
          <tr>
            <td colspan="2">Сиг</td>
            <td>72,3</td>
            <td>19</td>
            <td>7,5</td>
            <td>0</td>
            <td>144</td>
          </tr>
          <tr>
            <td colspan="2">Скумбрия</td>
            <td>71,8</td>
            <td>18</td>
            <td>9</td>
            <td>0</td>
            <td>153</td>
          </tr>
          <tr>
            <td colspan="2">Сом</td>
            <td>75</td>
            <td>16,8</td>
            <td>8,5</td>
            <td>0</td>
            <td>144</td>
          </tr>
          <tr>
            <td colspan="2">Ставрида</td>
            <td>74,9</td>
            <td>18,5</td>
            <td>5</td>
            <td>0</td>
            <td>119</td>
          </tr>
          <tr>
            <td colspan="2">Стерлядь</td>
            <td>74,9</td>
            <td>17</td>
            <td>6,1</td>
            <td>0</td>
            <td>320</td>
          </tr>
          <tr>
            <td colspan="2">Судак</td>
            <td>78,9</td>
            <td>19</td>
            <td>0,8</td>
            <td>0</td>
            <td>83</td>
          </tr>
          <tr>
            <td colspan="2">Треска</td>
            <td>80,7</td>
            <td>17,5</td>
            <td>0,6</td>
            <td>0</td>
            <td>75</td>
          </tr>
          <tr>
            <td colspan="2">Угольная рыба</td>
            <td>71,5</td>
            <td>13,2</td>
            <td>11,6</td>
            <td>0</td>
            <td>158</td>
          </tr>
          <tr>
            <td colspan="2">Угорь морской</td>
            <td>77,5</td>
            <td>19,1</td>
            <td>1,9</td>
            <td>0</td>
            <td>94</td>
          </tr>
          <tr>
            <td colspan="2">Угорь</td>
            <td>53,5</td>
            <td>14,5</td>
            <td>30,5</td>
            <td>0</td>
            <td>333</td>
          </tr>
          <tr>
            <td colspan="2">Хек</td>
            <td>79,9</td>
            <td>16,6</td>
            <td>2,2</td>
            <td>0</td>
            <td>86</td>
          </tr>
          <tr>
            <td colspan="2">Щука</td>
            <td>70,4</td>
            <td>18,8</td>
            <td>0,7</td>
            <td>0</td>
            <td>82</td>
          </tr>
          <tr>
            <td colspan="2">Язь</td>
            <td>80,1</td>
            <td>18,2</td>
            <td>0,3</td>
            <td>0</td>
            <td>117</td>
          </tr>
          <tr>
            <th colspan="7">Морепродукты</th>
          </tr>
          <tr>
            <td colspan="2">Кальмар</td>
            <td>80,3</td>
            <td>18</td>
            <td>0,3</td>
            <td>0</td>
            <td>75</td>
          </tr>
          <tr>
            <td colspan="2">Краб</td>
            <td>81,5</td>
            <td>16</td>
            <td>0,5</td>
            <td>0</td>
            <td>69</td>
          </tr>
          <tr>
            <td colspan="2">Креветка</td>
            <td>77,5</td>
            <td>18</td>
            <td>0,8</td>
            <td>0</td>
            <td>83</td>
          </tr>
          <tr>
            <td colspan="2">Морская капуста</td>
            <td>88</td>
            <td>0,9</td>
            <td>0,2</td>
            <td>3</td>
            <td>5</td>
          </tr>
          <tr>
            <td colspan="2">Паста "Океан"</td>
            <td>72,2</td>
            <td>18,9</td>
            <td>6,8</td>
            <td>0</td>
            <td>137</td>
          </tr>
          <tr>
            <td colspan="2">Трепанг</td>
            <td>89,4</td>
            <td>7,3</td>
            <td>0,6</td>
            <td>0</td>
            <td>35</td>
          </tr>
          <tr>
            <th colspan="7">Икра</th>
          </tr>
          <tr>
            <td colspan="2">Кеты зернистая</td>
            <td>46,9</td>
            <td>31,6</td>
            <td>13,8</td>
            <td>0</td>
            <td>251</td>
          </tr>
          <tr>
            <td colspan="2">Лещевая пробойная</td>
            <td>58</td>
            <td>24,7</td>
            <td>4,8</td>
            <td>0</td>
            <td>142</td>
          </tr>
          <tr>
            <td colspan="2">Минтаевая пробойная</td>
            <td>63,2</td>
            <td>28,4</td>
            <td>1,9</td>
            <td>0</td>
            <td>131</td>
          </tr>
          <tr>
            <td colspan="2">Осетровая зернистая</td>
            <td>58</td>
            <td>28,9</td>
            <td>9,7</td>
            <td>0</td>
            <td>203</td>
          </tr>
          <tr>
            <td colspan="2">Осетровая пробойная</td>
            <td>39,5</td>
            <td>36</td>
            <td>10,2</td>
            <td>0</td>
            <td>123</td>
          </tr>
          <tr>
            <th colspan="7">Рыба горячего копчения</th>
          </tr>
          <tr>
            <td colspan="2">Лещ средний</td>
            <td>59,9</td>
            <td>32,8</td>
            <td>4,5</td>
            <td>0</td>
            <td>172</td>
          </tr>
          <tr>
            <td colspan="2">Салака (копчушка)</td>
            <td>65,1</td>
            <td>25,4</td>
            <td>5,6</td>
            <td>0</td>
            <td>152</td>
          </tr>
          <tr>
            <td colspan="2">Треска потрошеная без головы</td>
            <td>69,4</td>
            <td>26</td>
            <td>1,2</td>
            <td>0</td>
            <td>115</td>
          </tr>
          <tr>
            <td colspan="2">Угорь потрошеный</td>
            <td>43,5</td>
            <td>15,7</td>
            <td>35,9</td>
            <td>0</td>
            <td>386</td>
          </tr>
          <tr>
            <th colspan="7">Рыбные консервы в масле</th>
          </tr>
          <tr>
            <td colspan="2">Сардины атлантич. (ломтики)</td>
            <td>59</td>
            <td>17,9</td>
            <td>19,7</td>
            <td>0</td>
            <td>249</td>
          </tr>
          <tr>
            <td colspan="2">Сайра</td>
            <td>56</td>
            <td>18,3</td>
            <td>23,3</td>
            <td>0</td>
            <td>283</td>
          </tr>
          <tr>
            <td colspan="2">Скумбрия</td>
            <td>62,4</td>
            <td>19,5</td>
            <td>15,8</td>
            <td>0</td>
            <td>220</td>
          </tr>
          <tr>
            <td colspan="2">Треска копченая</td>
            <td>52,9</td>
            <td>20,7</td>
            <td>22,9</td>
            <td>0</td>
            <td>290</td>
          </tr>
          <tr>
            <td colspan="2">Шпроты</td>
            <td>46,4</td>
            <td>17,4</td>
            <td>32,4</td>
            <td>0,4</td>
            <td>364</td>
          </tr>
          <tr>
            <th colspan="7">Рыбные консервы в томате</th>
          </tr>
          <tr>
            <td colspan="2">Бычки</td>
            <td>70,8</td>
            <td>12,8</td>
            <td>8,1</td>
            <td>5,2</td>
            <td>145</td>
          </tr>
          <tr>
            <td colspan="2">Камбала</td>
            <td>71,6</td>
            <td>13,7</td>
            <td>6,3</td>
            <td>4,8</td>
            <td>132</td>
          </tr>
          <tr>
            <td colspan="2">Кета</td>
            <td>65,3</td>
            <td>19,7</td>
            <td>8,2</td>
            <td>4,1</td>
            <td>168</td>
          </tr>
          <tr>
            <td colspan="2">Лещ</td>
            <td>71,1</td>
            <td>15,3</td>
            <td>7,4</td>
            <td>2,6</td>
            <td>139</td>
          </tr>
          <tr>
            <td colspan="2">Ставрида</td>
            <td>66,7</td>
            <td>14,8</td>
            <td>8,3</td>
            <td>7,3</td>
            <td>161</td>
          </tr>
          <tr>
            <td colspan="2">Судак</td>
            <td>74,2</td>
            <td>14</td>
            <td>5,3</td>
            <td>3,7</td>
            <td>119</td>
          </tr>
          <tr>
            <td colspan="2">Щука</td>
            <td>74,7</td>
            <td>14,2</td>
            <td>4</td>
            <td>3,6</td>
            <td>108</td>
          </tr>
          <tr>
            <th colspan="7">Рыбные консервы натуральные</th>
          </tr>
          <tr>
            <td colspan="2">Горбуша</td>
            <td>70,6</td>
            <td>20,9</td>
            <td>5,8</td>
            <td>0</td>
            <td>138</td>
          </tr>
          <tr>
            <td colspan="2">Кета</td>
            <td>70,4</td>
            <td>21,5</td>
            <td>4,8</td>
            <td>0</td>
            <td>131</td>
          </tr>
          <tr>
            <td colspan="2">Креветка дальневосточная</td>
            <td>64,8</td>
            <td>28,7</td>
            <td>1,2</td>
            <td>0</td>
            <td>134</td>
          </tr>
          <tr>
            <td colspan="2">Печень трески</td>
            <td>26,4</td>
            <td>4,2</td>
            <td>65,7</td>
            <td>0</td>
            <td>613</td>
          </tr>
          <tr>
            <td colspan="2">Тунец</td>
            <td>74</td>
            <td>22,7</td>
            <td>0,7</td>
            <td>0</td>
            <td>96</td>
          </tr>
          <tr>
            <th colspan="7">Жиры</th>
          </tr>
          <tr>
            <td colspan="2">Жир бараний или говяжий топленый</td>
            <td>0,3</td>
            <td>0</td>
            <td>99,7</td>
            <td>0</td>
            <td>897</td>
          </tr>
          <tr>
            <td colspan="2">Шпик свиной (без шкурки)</td>
            <td>5,7</td>
            <td>1,4</td>
            <td>92,8</td>
            <td>0</td>
            <td>816</td>
          </tr>
          <tr>
            <td colspan="2">Маргарин молочный</td>
            <td>15,9</td>
            <td>0,3</td>
            <td>82,3</td>
            <td>1</td>
            <td>746</td>
          </tr>
          <tr>
            <td colspan="2">Маргарин бутербродный</td>
            <td>15,8</td>
            <td>0,5</td>
            <td>82</td>
            <td>1,2</td>
            <td>744</td>
          </tr>
          <tr>
            <td colspan="2">Майонез</td>
            <td>25</td>
            <td>3,1</td>
            <td>67</td>
            <td>2,6</td>
            <td>627</td>
          </tr>
          <tr>
            <td colspan="2">Масло растительное</td>
            <td>0,1</td>
            <td>0</td>
            <td>99,9</td>
            <td>0</td>
            <td>899</td>
          </tr>
          <tr>
            <td colspan="2">Масло сливочное</td>
            <td>15,8</td>
            <td>0,6</td>
            <td>82,5</td>
            <td>0,9</td>
            <td>748</td>
          </tr>
          <tr>
            <td colspan="2">Масло топленое</td>
            <td>1</td>
            <td>0,3</td>
            <td>98</td>
            <td>0,6</td>
            <td>887</td>
          </tr>
          <tr>
            <th colspan="7">Сладости</th>
          </tr>
          <tr>
            <td colspan="2">Мед</td>
            <td>17,2</td>
            <td>0,8</td>
            <td>0</td>
            <td>80,3</td>
            <td>308</td>
          </tr>
          <tr>
            <td colspan="2">Драже фруктовое</td>
            <td>7</td>
            <td>3,7</td>
            <td>10,2</td>
            <td>73,1</td>
            <td>384</td>
          </tr>
          <tr>
            <td colspan="2">Зефир</td>
            <td>20</td>
            <td>0,8</td>
            <td>0</td>
            <td>78,3</td>
            <td>299</td>
          </tr>
          <tr>
            <td colspan="2">Ирис</td>
            <td>6,5</td>
            <td>3,3</td>
            <td>7,5</td>
            <td>81,8</td>
            <td>387</td>
          </tr>
          <tr>
            <td colspan="2">Мармелад</td>
            <td>21</td>
            <td>0</td>
            <td>0,1</td>
            <td>77,7</td>
            <td>296</td>
          </tr>
          <tr>
            <td colspan="2">Карамель (в среднем)</td>
            <td>4,4</td>
            <td>0</td>
            <td>0,1</td>
            <td>77,7</td>
            <td>296</td>
          </tr>
          <tr>
            <td colspan="2">Конфеты, глазированные шоколадом</td>
            <td>7,9</td>
            <td>2,9</td>
            <td>10,7</td>
            <td>76,6</td>
            <td>396</td>
          </tr>
          <tr>
            <td colspan="2">Пастила</td>
            <td>18</td>
            <td>0,5</td>
            <td>0</td>
            <td>80,4</td>
            <td>305</td>
          </tr>
          <tr>
            <td colspan="2">Сахар</td>
            <td>0,2</td>
            <td>0,3</td>
            <td>0</td>
            <td>99,5</td>
            <td>374</td>
          </tr>
          <tr>
            <td colspan="2">Халва тахинная</td>
            <td>3,9</td>
            <td>12,7</td>
            <td>29,9</td>
            <td>50,6</td>
            <td>510</td>
          </tr>
          <tr>
            <td colspan="2">Халва подсолнечная</td>
            <td>2,9</td>
            <td>11,6</td>
            <td>29,7</td>
            <td>54</td>
            <td>516</td>
          </tr>
          <tr>
            <td colspan="2">Шоколад темный</td>
            <td>0,8</td>
            <td>5,4</td>
            <td>35,3</td>
            <td>52,6</td>
            <td>540</td>
          </tr>
          <tr>
            <td colspan="2">Шоколад молочный</td>
            <td>0,9</td>
            <td>6,9</td>
            <td>35,7</td>
            <td>52,4</td>
            <td>547</td>
          </tr>
          <tr>
            <th colspan="7">Мучные кондитерские изделия</th>
          </tr>
          <tr>
            <td colspan="2">Вафли с фруктовыми начинками</td>
            <td>12</td>
            <td>3,2</td>
            <td>2,8</td>
            <td>80,1</td>
            <td>342</td>
          </tr>
          <tr>
            <td colspan="2">Вафли с жиросодержащими начинками</td>
            <td>1</td>
            <td>3,4</td>
            <td>30,2</td>
            <td>64,7</td>
            <td>530</td>
          </tr>
          <tr>
            <td colspan="2">Пирожное слоеное с кремом</td>
            <td>9</td>
            <td>5,4</td>
            <td>38,6</td>
            <td>46,4</td>
            <td>544</td>
          </tr>
          <tr>
            <td colspan="2">Пирожное слоеное с яблоком</td>
            <td>13</td>
            <td>5,7</td>
            <td>25,6</td>
            <td>52,7</td>
            <td>454</td>
          </tr>
          <tr>
            <td colspan="2">Пирожное бисквитное с фруктовой начинкой</td>
            <td>21</td>
            <td>4,7</td>
            <td>9,3</td>
            <td>84,4</td>
            <td>344</td>
          </tr>
          <tr>
            <td colspan="2">Пряники</td>
            <td>14,5</td>
            <td>4,8</td>
            <td>2,8</td>
            <td>77,7</td>
            <td>336</td>
          </tr>
          <tr>
            <td colspan="2">Торт бисквитный с фруктовой начинкой</td>
            <td>25</td>
            <td>4,7</td>
            <td>20</td>
            <td>49,8</td>
            <td>386</td>
          </tr>
          <tr>
            <td colspan="2">Торт миндальный</td>
            <td>9,3</td>
            <td>6,6</td>
            <td>35,8</td>
            <td>46,8</td>
            <td>524</td>
          </tr>
          <tr>
            <th colspan="7">Соки</th>
          </tr>
          <tr>
            <td colspan="2">Абрикосовый</td>
            <td>84</td>
            <td>0,5</td>
            <td>0</td>
            <td>14</td>
            <td>56</td>
          </tr>
          <tr>
            <td colspan="2">Апельсиновый</td>
            <td>84,5</td>
            <td>0,7</td>
            <td>0</td>
            <td>13,3</td>
            <td>55</td>
          </tr>
          <tr>
            <td colspan="2">Виноградный</td>
            <td>80,3</td>
            <td>0,5</td>
            <td>0</td>
            <td>12,6</td>
            <td>52</td>
          </tr>
          <tr>
            <td colspan="2">Вишневый</td>
            <td>85</td>
            <td>0,7</td>
            <td>0</td>
            <td>12,2</td>
            <td>53</td>
          </tr>
          <tr>
            <td colspan="2">Мандариновый</td>
            <td>87,8</td>
            <td>0,8</td>
            <td>0</td>
            <td>9,6</td>
            <td>41</td>
          </tr>
          <tr>
            <td colspan="2">Яблочный</td>
            <td>87</td>
            <td>0,5</td>
            <td>0</td>
            <td>11,7</td>
            <td>47</td>
          </tr>
          <tr>
            <td colspan="2">Свекольный</td>
            <td>83,4</td>
            <td>1</td>
            <td>0</td>
            <td>14,6</td>
            <td>59</td>
          </tr>
          <tr>
            <td colspan="2">Томатный</td>
            <td>94,3</td>
            <td>1</td>
            <td>0</td>
            <td>3,3</td>
            <td>18</td>
          </tr>
          <tr>
            <th colspan="7">Напитки</th>
          </tr>
          <tr>
            <td colspan="2">Квас</td>
            <td>93,4</td>
            <td>0,2</td>
            <td>0</td>
            <td>5</td>
            <td>25</td>
          </tr>
          <tr>
            <td colspan="2">Лимонад</td>
            <td>92</td>
            <td>0</td>

            <td>0</td>
            <td>7,5</td>
            <td>31</td>
          </tr>
          <tr>
            <td colspan="2">Пиво</td>
            <td>92</td>
            <td>0,6</td>
            <td>0</td>
            <td>4,8</td>
            <td>37</td>
          </tr>
          <tr>
            <td colspan="2">Вино столовое красное</td>
            <td>89,2</td>
            <td>0,2</td>
            <td>0</td>
            <td>0,2</td>
            <td>71</td>
        </tr></tbody></table>';

        $dom    = new DOMDocument();
        $dom->loadHTML($d);
        $table = $dom->getElementsByTagName('table');

        $i=0;
        $datath = array();
        foreach($table->item(0)->getElementsByTagName('th') as $th){
            $datath[$i] = htmlentities(utf8_decode($th->nodeValue), ENT_QUOTES, 'UTF-8');
            $i++;
        }

        $data = array();
        $i = 0;
        $thj = 4;
        foreach($table->item(0)->getElementsByTagName('tr') as $tr){
            foreach($tr->getElementsByTagName('td') as $td){
                $data[$i][] = htmlentities(utf8_decode($td->nodeValue), ENT_QUOTES, 'UTF-8');
                $data[$i]['c'] =  $datath[$thj];
                $s = htmlentities(utf8_decode($td->nodeValue), ENT_QUOTES, 'UTF-8');
            }
            if (!( $data[$i][2])){
             //   var_dump($s[1]);
                $thj++;
            }
            $i++;
        };
        function getimage($name){
       //     return ' ';
            $name =str_replace(' ','%20',$name);
            $iurl = "http://api.ababeen.com/api/images.php?q=".$name."&preview=true";
            $result = file_get_contents($iurl);
            $pos = strpos($result, 'tbUrl',640);
            $pose = strpos($result, ')', $pos);
            $rest = substr($result, $pos+9, $pose-$pos-9);
            return $rest;
        }
          echo $rest.'<br>';
//   var_dump($result);
   //     var_dump( $result);
        for ($i=2;$i<=100;$i+=1){
            echo "<img width ='64' src='".getimage($data[$i][0])."'>".$data[$i][0].' '.$data[$i]['c'].'<br>';
            echo $i;
        };


?>