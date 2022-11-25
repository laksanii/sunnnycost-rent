class Kendaraan:
  def __init__(self, bahan_bakar):
    self.bahan_bakar = bahan_bakar

  # def setBahanBakar(self, bahan_bakar):
  #   self.bahan_bakar = bahan_bakar

  def getBahanBakar(self):
    return self.bahan_bakar

class Mobil(Kendaraan):
  merk = "Toyota"
  def __init__(self, nama):
    super().__init__("Pertalite")

  def getNama(self):
    return self.nama_mobil

  def getMerk(self):
    return self.merk




    
avanza = Mobil('Avanza')
# avanza.setBahanBakar("Pertalite")
print(avanza.getNama())
print(f"Merek mobil = {avanza.getMerk()}")
print(f"Bahan bakar = {avanza.getBahanBakar()}")