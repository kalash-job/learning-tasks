# learning-tasks

roman_numbers.php

Дано число X. Требуется перевести это число в римскую систему счисления.
ВХОДНЫЕ ДАННЫЕ
Дано число X в десятичной системе счисления (1  ≤  X  ≤  3999).
ВЫХОДНЫЕ ДАННЫЕ
Выведите X в римской системе счисления.
Примеры
4	IV
19	XIX
46	XLVI

Римские цифры - это особые знаки, используемые для записи десятичных разрядов и их половин. Для обозначения чисел римскими цифрами применяется 7 букв латинского алфавита:
I -1
V -5
X - 10
L - 50
C - 100
D - 500
M - 1000


for-in-arrays.php

Реализуйте функцию addPrefix, которая добавляет к каждому элементу массива переданный префикс и возвращает получившийся массив. Функция предназначена для работы со строковыми элементами. Аргументы:

    Массив
    Префикс

После префикса автоматически добавляется пробел.


change_of_elements.php

Реализуйте функцию swap, которая меняет местами два элемента относительно переданного индекса. Например, если передан индекс 5, то функция меняет местами элементы, находящиеся по индексам 4 и 6.  Параметры функции:      Массив     
Индекс  Если хотя бы одного из индексов не существует, функция возвращает исходный массив.


sequence.php

Реализуйте функцию isContinuousSequence, которая проверяет, является ли переданная последовательность целых чисел возрастающей непрерывно (не имеющей пропусков чисел). Например, последовательность [4, 5, 6, 7] — непрерывная, а [0, 
1, 3] — нет. Последовательность может начинаться с любого числа, главное условие — отсутствие пропусков чисел. Последовательность из одного числа не может считаться возрастающей.


calculateAverage.php

Реализуйте функцию calculateAverage, которая высчитывает среднее арифметическое элементов массива. В случае пустого массива функция должна вернуть значение null (используйте в коде для этого guard expression)


findIndex.php

Реализуйте функцию findIndex, которая возвращает первый встретившийся индекс переданного элемента в случае, если элемент присутствует в массиве, и -1 в случае, если он отсутствует.


getSameParity.php

Реализуйте функцию getSameParity, которая принимает на вход массив чисел и возвращает новый, состоящий из элементов, у которых такая же чётность, как и у первого элемента входного массива. Если на вход функции передан пустой 
массив, то она должна вернуть пустой массив.


getIndexOfWarmestDay.php

У вас есть набор данных, описывающих изменение температуры воздуха в одном городе в течение нескольких суток. Данные представлены массивом, в котором каждый элемент — это массив, содержащий список температур в течение одних суток.
Реализуйте функцию getIndexOfWarmestDay, которая находит самый тёплый день (тот, в котором была зарегистрирована максимальная температура) и возвращает индекс этого дня в исходном массиве.
Подсказки      Если на вход поступил пустой массив, то функция должна вернуть null.     Если существует несколько дней с максимальной температурой, то функция возвращает индекс последнего из этих дней (то есть выбирается день с 
наибольшим индексом).


buildDefinitionList.php

Реализуйте функцию buildDefinitionList, которая генерирует html список определений (теги dl, dt и dd) и возвращает получившуюся строку. При отсутствии элементов в массиве функция возвращает пустую строку.


makeCensored.php

Реализуйте функцию makeCensored, которая заменяет каждое вхождение указанных слов в предложении на последовательность $#%! и возвращает полученную строку. Аргументы:      Текст     Набор стоп слов  Словом считается любая 
непрерывная последовательность символов, включая любые спецсимволы (без пробелов).


getSameCount.php

Реализуйте функцию getSameCount, которая считает количество общих уникальных элементов для двух массивов. Аргументы:      Первый массив     Второй массив.



countUniqChars.php

Реализуйте функцию countUniqChars, которая получает на вход строку и считает, сколько символов (уникальных символов) использовано в этой строке. Например, в строке 'yy' всего один уникальный символ — y. А в строке '111yya!' — 
четыре уникальных символа: 1, y, a и !.  Задание необходимо выполнить без использования функции array_unique.



bubbleSort.php

Реализуйте функцию bubbleSort, которая сортирует массив используя пузырьковую сортировку. Постарайтесь не подглядывать в текст теории и попробуйте воспроизвести алгоритм по памяти.


checkIfBalanced.php

Реализуйте функцию checkIfBalanced, которая проверяет балансировку круглых скобок в арифметических выражениях.


getIntersectionOfSortedArray.php
Реализуйте функцию getIntersectionOfSortedArray, которая принимает на вход два отсортированных массива и находит 
их пересечение.
