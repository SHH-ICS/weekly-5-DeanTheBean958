number_of_digits = input(); chars = set('0123456789')
if all((c in chars) for c in number_of_digits):
  number_of_digits = int(number_of_digits)
  result = 0 
  for P in range(number_of_digits):
    result = result + ((-1)**P/(2*P+1))*4
  print(result)