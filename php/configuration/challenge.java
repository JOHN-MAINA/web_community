class MyClass {

    private static MyClass instance;
    private static Object instanceMutex = new Object();

    private MyClass() {
        // construct
    }

    public static MyClass instantiate() {
        synchronized(instanceMutex) {
            if  (instance == null) {
                instance = new MyClass();
            }
        }
        return instance;
    }

}
