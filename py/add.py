import sys
def add(a,b):
    a = int(a)
    b = int(b)
    return a+b
if __name__ == "__main__":
    print add(sys.argv[1], sys.argv[2])