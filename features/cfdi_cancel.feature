Feature: Admovil cancel Voucher
    In Order to cancel a voucher
    As a User
    I need to be cancel the Voucher

  Scenario: Cancel voucher
      Given I generate a multiples bills as:
          | value | currency |
          | 250   | MXN      |
      Then Must me notified that voucher is canceled
