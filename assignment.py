def calcPi(digits):
  if digits == "":
    print("please input a number")
    return
  if digits[0] == "-":
    print("number must be greater than 0")
    return
  if not digits.isdigit():
    print("invaild input")
    return 

  n = int(digits)
  if n <= 0:
    print("number must be greater than 0")
    return
  i = 0
  pi =  0 
  num = 1
  den = 1

  while i < n:
    pi = pi + num/den
    num = num*-1
    den = den + 2
    i = i + 1

  pi = pi*4 
  print(pi)  

a = input("please enter how many times I should run the loop:")
calcPi(a)
